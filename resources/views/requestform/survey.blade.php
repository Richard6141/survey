@extends('layouts.app')

@section('content')
<div class="col s12 m12 l12">
      <div id="Form-advance" class="card card card-default scrollspy">
        <div class="card-content">
          <h3 class="card-title">Formulaire</h3>
          <form action="{{ route('create.survey') }}" method="POST">
            @csrf
            <h4 class="card-title">Informations démographiques</h4>
            <div class="row">
              <div class="input-field col m6 s12">
                <select name="sexe">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="M">Homme</option>
                  <option value="F">Femme</option>
                </select>
                <label for="first_name01">Sexe</label>
              </div>
              <div class="input-field col m6 s12">
                <select name="age">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="Moins de 18 ans">Moins de 18 ans</option>
                  <option value="18-34 ans">18-34 ans</option>
                  <option value="35-54 ans">35-54 ans</option>
                  <option value="55 ans et plus">55 ans et plus</option>
                </select>
                <label for="last_name">Age</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <select name="location">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="Abomey-calavi">Abomey-calavi</option>
                  <option value="Cotonou">Cotonou</option>
                  <option value="Porto-novo">Porto-novo</option>
                  <option value="Autres">Autres</option>
                </select>
                <label for="first_name01">Localisation</label>
              </div>
              <div class="input-field col m6 s12">
                <select name="profession">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="Etudiant">Etudiant</option>
                  <option value="Fonctionnaire">Fonctionnaire</option>
                  <option value="Revendeur">Revendeur</option>
                  <option value="Artisan">Artisan</option>
                  <option value="Autres">Autres</option>
                </select>
                <label for="last_name">Profession</label>
              </div>
            </div>
            <h4 class="card-title">Expérience de paiement en ligne</h4>
            <div class="row">
              <div class="input-field col m6 s12">
                <h6>Avez-vous déjà effectué des paiements en ligne?</h6>
                <select name="online_payment">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="true">Oui</option>
                  <option value="false">Non</option>
                </select>
              </div>
              <div class="input-field col m6 s12">
                <h6>Si non, dites nous pourquoi?</h6>
                <textarea id="message5" name="why_not_paid" class="materialize-textarea" placeholder="Raison"></textarea>
              </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <h6>Si oui, quel produit avez vous commandé ?</h6>
                <textarea id="message5" name="which_product" class="materialize-textarea" placeholder="Raison"></textarea>
              </div>
              <div class="input-field col m6 s12">
                <h6>A quelle fréquence vous effectuez vos achats en ligne ?</h6>
                <select name="payment_frequency">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="Quotidiennement">Quotidiennement</option>
                  <option value="Hebdomadairement">Hebdomadairement</option>
                  <option value="Mensuellement">Mensuellement</option>
                  <option value="Occasionnellement">Occasionnellement</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col m6 s12 file-field input-field">
                <h6>Quels sont les principaux obstacles ou préoccupations que vous rencontrez lors des paiements en ligne au Bénin? (Choisissez les trois principales préoccupations)</h6>
                <select id="multiple-select" name="payment_obstacles[]" multiple>
                  <option value="Sécurité des transactions en ligne">Sécurité des transactions en ligne</option>
                  <option value="Manque de confiance dans les plateformes de paiement en ligne">Manque de confiance dans les plateformes de paiement en ligne</option>
                  <option value="Problèmes de connectivité Internet">Problèmes de connectivité Internet</option>
                  <option value="Difficulté à effectuer des remboursements ou à résoudre les problèmes liés aux paiements en ligne">Difficulté à effectuer des remboursements ou à résoudre les problèmes liés aux paiements en ligne</option>
                  <option value="Autre (veuillez préciser)">Autre (veuillez préciser)</option>
                </select>
              </div>
             <div class="input-field col m6 s12">
                <h6>Parmi les options suivantes, quelle méthode de paiement en ligne préférez-vous utiliser au Bénin?</h6>
                <select name="payment_method">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="Cartes de crédit/débit">Cartes de crédit/débit</option>
                  <option value="Portefeuilles mobiles (par exemple, VISA , Mastercard ,Moov Money, MTN Mobile Money)">Portefeuilles mobiles (par exemple, VISA , Mastercard ,Moov Money, MTN Mobile Money)</option>
                  <option value="Services bancaires en ligne">Services bancaires en ligne</option>
                  <option value="Paiement en espèce">Paiement en espèce</option>
                  <option value="Autre (veuillez préciser)">Autre (veuillez préciser)</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <h6>Avez-vous déjà choisi un produit spécifiquement en raison de la possibilité de livraison à domicile ?</h6>
                <select name="choose_product_by_home_delivery">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="true">Oui</option>
                  <option value="false">Non</option>
                </select>
              </div>
              <div class="input-field col m6 s12">
                <h6>Avez-vous déjà utilisé des services de livraison à domicile  ?</h6>
                <select name="use_delivery_service">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="true">Oui</option>
                  <option value="false">Non</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <h6>Le coût de la livraison a t'il une influence sur vos achats en ligne ?</h6>
                <select name="delivery_cost_influence_shop">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="true">Oui</option>
                  <option value="false">Non</option>
                </select>
              </div>
              <div class="input-field col m6 s12">
                <h6>Pensez-vous que la livraison à domicile devrait être offerte gratuitement pour tous les produits que vous achetez  ?</h6>
                <select name="free_delivery_all_product">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="true">Oui</option>
                  <option value="false">Non</option>
                </select>
              </div>
            </div>
            <div class="row">
              <h6>Quelles améliorations ou options supplémentaires aimeriez-vous voir proposées en matière de livraison à domicile ?</h6>
              <div class="input-field col s12">
                <textarea id="message10" name="improve_free_delivery" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </div>
              </div>
              <h5>Section 3: Perspectives sur l'avenir des paiements en ligne au Bénin</h5>
              <div class="row">
              <div class="input-field col m6 s12">
                <h6>Selon vous, quels sont les avantages des paiements en ligne Bénin par rapport aux méthodes de paiement traditionnelles?</h6>
                <select name="online_payment_advantage">
                  <option value="" disabled selected>Choisissez</option>
                  <option value="Commodité">Commodité</option>
                  <option value="Rapidité des transactions">Rapidité des transactions</option>
                  <option value="Sécurité accrue des transactions">Sécurité accrue des transactions</option>
                  <option value="Accès à un plus large éventail de produits et services">Accès à un plus large éventail de produits et services</option>
                  <option value="Meilleure traçabilité des dépenses">Meilleure traçabilité des dépenses</option>
                  <option value="Autre (veuillez préciser)">Autre (veuillez préciser)</option>
                </select>
              </div>
              <div class="input-field col m6 s12">
                <h6>Quels sont, selon vous, les principaux défis à surmonter pour favoriser l'adoption généralisée des paiements en ligne au Bénin?</h6>
                <p class="input-field col s12">
                <textarea id="message11" name="online_payment_defi" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </p>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m6 s12">
                <h6>Seriez-vous disposé(e) à utiliser davantage les paiements en ligne si les problèmes actuels étaient résolus? Pourquoi ou pourquoi pas ?</h6>
                <p class="input-field col s12">
                <textarea id="message6" name="yes_online_payment_if_resolve" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </p>
              </div>
              <div class="input-field col m6 s12">
                <h6>Quelles améliorations ou fonctionnalités aimeriez-vous voir mises en place pour rendre les paiements en ligne plus attrayants et facile au Bénin ?</h6>
                <p class="input-field col s12">
                <textarea id="message7" name="which_improvment_fonctionality" class="materialize-textarea"></textarea>
                <label for="message">Message</label>
              </p>
              </div>
            </div>
              <div class="row">
                <div class="input-field col s12">
                  <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endsection