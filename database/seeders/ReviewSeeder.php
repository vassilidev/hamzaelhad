<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c2 = "Ce site a été un plaisir phénoménal et absolu de travailler avec lui. Son travail est non seulement impeccable, mais c'est aussi un professionnelle de tous les domaines. La qualité de mon site web est époustouflante. J'avais environ un million de questions et elle a répondu à toutes rapidement. Elle a aussi ajouté des extras que je n'attendais pas. Je la recommande à 100 %. Elle est la seule personne qui sera autorisée à créer mes magasins et mes sites web à l'avenir. Je conseille à tout le monde de prendre le service pour pouvoir bénéficier de son mentorat et de son soutien tout au long de votre vie il est le MEILLEURE !";
        $c1 = "Communication - Au-delà de l'excellence. il m'a toujours tenu au courant de l'évolution du site web ou de toute information supplémentaire dont elle avait besoin. La communication était parfaite. Le résultat obtenu était étonnant. il a fait plus que son devoir pour faire avancer les choses et m'a aussi donné beaucoup de bonus.  Le thème qu'elle utilise est également très unique , ce qui contribue vraiment à créer l'image de marque. Elle crée le site web comme s'il lui appartenait - tout comme la description. je reviendrai certainement pour d'autres sites web à l'avenir.";
        $c3 = "Ce fut un plaisir de travailler avec Hamza. Nous avons pu bien travailler ensemble pour construire un magasin Shopify qui a dépassé mes attentes. Hamza  a été très patient avec moi et a répondu aux demandes selon les besoins. Je pense que nous avons tous les deux appris quelques choses en cours de route, et j'apprécie ses conseils et sa tolérance. Je recommande vivement ses services et j'espère que je travaillerai à nouveau avec lui bientôt.... si il reste une place. Nous lancerons une autre marque dans quelques jours";
        $c4 = "Je ne saurais trop vous remercier pour le beau travail que vous avez accompli. Hamza est la meilleure personne à qui s'adresser pour des projets. Elle est honnête et travaille dur. Je travaillerai certainement à nouveau avec lui. Ne perdez pas votre temps et votre argent ailleurs. Vous êtes en de bonnes mains avec hamza. Tous mes vœux de réussite sans oublier de remercier theo pour l effort aussi";
        $c5 = "Si heureux des résultats ! J'aurais aimé avoir trouvé hamza et theo plus tôt, ce qui m'aurait permis de gagner quelques mois à essayer de trouver comment créer un magasin par moi-même et de rechercher la solution pour stripe au maroc. La boutique est superbe, je la recommande vivement à tous ceux qui recherchent un résultat de grande qualité.";

        $content = [
            $c1,
            $c2,
            $c3,
            $c4,
        ];

        foreach ($content as $cont) {
            Review::factory()->create([
                'content' => $cont,
                'star' => 5,
            ]);
        }
    }
}
