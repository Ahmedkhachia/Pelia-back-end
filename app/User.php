<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use  HasApiTokens, Notifiable;

    protected $table = "users";
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'prenom', 'id_type', 'email', 'phone',  'age', 'ville', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getTypeAttribute()
    {
        $data= User::select("*")
        ->join("type_users", "users.id_type", "=", "type_users.id_type")
        ->where('users.id', Auth::user()->id)
        ->get();

        return $data[0]->nom_type;
    }

    public function medicament(){
        return $this->belongsToMany('\App\Medicament', 'temps_prises', 'id_user', 'id_medicament' );
    }


    public function name($id){
        return User::select('prenom', 'nom')
        ->where('users.id', $id)
        ->get();
    }
   

    public function patients($type){
        return User::select("*")
        ->where('users.id_type', $type)
        ->get();
    }

    public function getUser($id){
        return User::select("*")
        ->where('users.id', $id)
        ->get();
    }

    public function getAllMedecins(){
        $get = User::select("*")
        ->join("users_info", "users_info.user_id", "=", "users.id")
        ->where("users.id_type", 2)
        ->get();

        $table = [];
        foreach($get as $item){
                $getSpecialite =medecin_specialite::select("*")
                ->join("specialite", "specialite.id_specialite", "=", "medecin_specialite.id_specialite")
                ->where([
                    ["medecin_specialite.id_medecin", $item->id]
                ])
                ->get();
                $arr = $item->toArray();
                $arr += array("specialite" => $getSpecialite->toArray());
                array_push($table, $arr); 
        }
        return $table;
    }

   
}
