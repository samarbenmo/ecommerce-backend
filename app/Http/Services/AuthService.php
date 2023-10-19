<?php
namespace App\Http\Services;
use App\Models\CRM\User;
class AuthService {
    protected $user;
    public function __construct(User $user) {
        $this->user = $user;
    }

    private getProfile()
    {
      if($user->profile())
      {
        return $this->user->profile();
      }

      public function updateProfile(array $data)
      {
          // Implémentez la logique pour mettre à jour le profil utilisateur ici
      }
    }
}
