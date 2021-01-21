<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio2 = "Je suis designer et un développeur et concepteur Web professionnel en e-commerce expérimenté et passionné, qui vous propose une large gamme de services professionnels. Je crée des boutique en ligne depuis plus de 4 ans et j'ai créé des centaines de magasins à succès Je peux développer un site e-commerce sur shopify en fonction de vos besoins pour vous proposer des solutions haut de gamme. considérez votre travail avec un niveau de satisfaction plus élevé à un prix équitable. Je suis là pour vous aider à obtenir un revenu passif et à être l'un d'entre eux.";
        $bio1 = "Aujourd'hui, mes marques commerce ont réalisé 7 chiffres de chiffre d'affaires. Tout en dirigeant ces magasins, j'ai réalisé que j'appréciais chaque instant de la conception d'un magasin d'apparence de marque qui convertit et génère des ventes. Je possède maintenant un studio de design où nous avons pour mission de permettre à 1000 entrepreneurs d'avoir leurs magasins de rêve. Rejoignez-moi dans ce voyage et créez un magasin Shopify parfait qui se convertit et obtenez des solutions pour les paiements shopify!";
        User::factory()->create([
            'name' => 'HAMZA ELHAD',
            'title' => 'Créateur',
            'bio' => $bio1,
        ]);

        User::factory()->create([
            'name' => 'Théo Laurence',
            'title' => 'Designer/Développeur',
            'bio' => $bio1,
        ]);
    }
}
