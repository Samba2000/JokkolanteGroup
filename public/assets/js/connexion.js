// JavaScript code
const selectButton = document.querySelector('.select-button');
const selectOptions = document.querySelector('.select-options');
const selectIcon = selectButton.querySelector('.select-icon');

selectButton.addEventListener('click', () => {
    selectButton.classList.toggle('active');
    selectOptions.classList.toggle('active');
    selectIcon.classList.toggle('active');
});

selectOptions.addEventListener('click', (e) => {
    if (e.target.classList.contains('select-option')) {
        selectButton.textContent = e.target.textContent;
        selectButton.classList.remove('active');
        selectOptions.classList.remove('active');
        selectIcon.classList.remove('active');
    }
});

function afficherFormulaire() {

 var selectOption = document.querySelector('.select-button').textContent;
 var suivantButton = document.getElementById('suivant');
 var sidbar = document.getElementById('sidebar');
 var sidbarNav = document.getElementById('sidebar-nav');
 var cardBody = document.getElementById('card-body');
 var baseUrl = "{{ asset('') }}";


 if (selectOption.includes('Je suis client')) {
     // Afficher le formulaire du client
     suivantButton.style.display = 'none';
     cardBody.style.backgroundImage = 'none';
     sidbar.style.height = '650px';
     sidbarNav.style.backgroundImage = 'url(' + baseUrl + 'assets/images/3.png)';

     var formulaire = document.getElementById('formulaire');
     formulaire.innerHTML = `
     <div class="forme">
         <h3>Créez un compte rapidement avec l’un de ces services :</h3>
         <div class="reseau">
             <img src="{{ asset('assets/images/Vector.png') }}" alt="">
             <img src="{{ asset('assets/images/Vector1.png') }}" alt="">
             <img src="{{ asset('assets/images/Group 119.png') }}" alt="">
             <img src="{{ asset('assets/images/Group 118.png') }}" alt="">
         </div>
         <hr>
         <h4>Créez un compte avec votre adresse email :</h4>
         <form method="POST" action="{{ route('inscription.register') }}" id="inscription-form" onsubmit="return validerFormulaire()">
             @csrf

             <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Votre adresse email <span>(obligatoire)</span></label>
                 <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                 @error('email')
                     <span class="text-danger">{{ $message->first('email') }}</span>
                 @enderror

             </div>
             <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Choisissez votre pseudo <span>(obligatoire)</span></label>
                 <input type="pseudo" class="form-control" name="pseudo" id="exampleInputPseudo1" aria-describedby="emailHelp">
                 @error('pseudo')
                     <span class="text-danger">{{ $message->first('pseudo') }}</span>
                 @enderror

                 <div id="emailHelp" class="form-text">Votre pseudo sera affiché sur le site et utilisé pour vous identifier. En minuscule, sans espace, que des lettres, chiffres et caractères "-" et "_".</div>
             </div>
             <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Choisissez votre mot de passe <span>(obligatoire)</span></label>
                 <input type="password" class="form-control" name="password" id="exampleInputPassword1"><i class="icon"><img src="{{ asset('assets/images/arcticons_passwordkeeper.png') }}" alt=""></i>
                 @error('password')
                     <span class="text-danger">{{ $message->first('password') }}</span>
                 @enderror

                 <div id="emailHelp" class="form-text">La création d'un compte implique que vous avez lu et accepté <span class="span1">les termes et conditionsd'utilisation.</span></div>
             </div>
                 <button type="submit">S’incrire</button>
         </form>
     </div>
 `;
     selectOptions.addEventListener('click', (e) => {
         if (e.target.classList.contains('select-option')) {
             selectButton.textContent = e.target.textContent;
             selectButton.classList.remove('active');
             selectOptions.classList.remove('active');
             selectIcon.classList.remove('active');
             afficherFormulaire
                 (); // Appel de la fonction afficherFormulaire() après avoir sélectionné une option
         }
     });
 } else if (selectOption.includes('Je suis prestataire')) {
     // Afficher le formulaire du prestataire
     suivantButton.style.display = 'none';
     cardBody.style.backgroundImage = 'none';
     sidbar.style.height = '650px';
     sidbarNav.style.backgroundImage = 'url(' + baseUrl + 'assets/images/pexels-fauxels-3184423 1.png)';

     var formulaire = document.getElementById('formulaire');
     formulaire.innerHTML = `
     <div class="forme">
         <h3>Créez un compte rapidement avec l’un de ces services :</h3>
         <div class="reseau">
             <img src="{{ asset('assets/images/Vector.png') }}" alt="">
             <img src="{{ asset('assets/images/Vector1.png') }}" alt="">
             <img src="{{ asset('assets/images/Group 119.png') }}" alt="">
             <img src="{{ asset('assets/images/Group 118.png') }}" alt="">
         </div>
         <hr>
         <h4>Créez un compte avec votre adresse email :</h4>
         <form method="POST" action="{{ route('inscription.register') }}">
             @csrf
             <div class="mb-3">
                 <label for="exampleInputEmail1" class="form-label">Votre adresse email <span>(obligatoire)</span></label>
                 <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                 @error('email')
                   <span class="text-danger">{{ $message }}</span>
                 @enderror
             </div>
             <div class="mb-3">
                 <label for="exampleInputPseudo1" class="form-label">Choisissez votre pseudo <span>(obligatoire)</span></label>
                 <input type="pseudo" class="form-control" name="pseudo" id="exampleInputPseudo1" aria-describedby="pseudoHelp">
                 @error('pseudo')
                   <span class="text-danger">{{ $message }}</span>
                 @enderror
                 <div id="pseudoHelp" class="form-text">Votre pseudo sera affiché sur le site et utilisé pour vous identifier. En minuscule, sans espace, que des lettres, chiffres et caractères "-" et "_".</div>
             </div>
             <div class="mb-3">
                 <label for="exampleInputPassword1" class="form-label">Choisissez votre mot de passe <span>(obligatoire)</span></label>
                 <input type="password" class="form-control" name="password" id="exampleInputPassword1"><i class="icon"><img src="{{ asset('assets/images/arcticons_passwordkeeper.png') }}" alt=""></i>
                 @error('password')
                   <span class="text-danger">{{ $message }}</span>
                 @enderror
                 <div id="passwordHelp" class="form-text">La création d'un compte implique que vous avez lu et accepté <span class="span1">les termes et conditionsd'utilisation.</span></div>
             </div>
                 <button type="submit">S’incrire</button>
         </form>
     </div>
 `;
 }


}

function validerFormulaire() {

 var emailInput = document.getElementById('exampleInputEmail1');
 var pseudoInput = document.getElementById('exampleInputPseudo1');
 var passwordInput = document.getElementById('exampleInputPassword1');

 var email = emailInput.value;
 var pseudo = pseudoInput.value;
 var password = passwordInput.value;
 var selectOption = document.querySelector('.select-button').textContent;
 var role = '';

 if (selectOption.includes('Je suis client')) {
     role = 'client';
 } else if (selectOption.includes('Je suis prestataire')) {
     role = 'prestataire';
 }

 // Envoyer le rôle au serveur, par exemple avec une requête AJAX
 // Vous pouvez utiliser la méthode fetch() ou d'autres bibliothèques AJAX comme Axios

 // Exemple avec fetch()
 fetch('/enregistrer-role', {
         method: 'POST',
         body: JSON.stringify({
             role: role
         }),
         headers: {
             'Content-Type': 'application/json'
         }
     })
     .then(response => {
         // Traiter la réponse du serveur
     })
     .catch(error => {
         // Gérer les erreurs
     });

 // Validation des champs
 var isValid = true;

 if (email === '') {
     // Champ email vide, afficher un message d'erreur
     isValid = false;
     // Ajouter un message d'erreur à l'interface utilisateur, par exemple :
     emailInput.classList.add('error');
     emailInput.nextElementSibling.textContent = 'Veuillez entrer une adresse e-mail.';
 } else {
     // Champ email rempli, enlever le message d'erreur
     emailInput.classList.remove('error');
     emailInput.nextElementSibling.textContent = '';
 }

 // Effectuer les validations pour les autres champs (pseudo, password)
 if (pseudo === '') {
     isValid = false;
     pseudoInput.classList.add('error');
     pseudoInput.nextElementSibling.textContent = 'Veuillez entrer votre pseudo.';
 } else {
     pseudoInput.classList.remove('error');
     pseudoInput.nextElementSibling.textContent = '';
 }

 if (password === '') {
     isValid = false;
     passwordInput.classList.add('error');
     passwordInput.nextElementSibling.textContent = 'Veuillez entrer votre mot de passe.';
 } else {
     passwordInput.classList.remove('error');
     passwordInput.nextElementSibling.textContent = '';
 }

 if (isValid) {
     // Le formulaire est valide, soumettre les données au serveur
     // Utiliser AJAX pour envoyer les données au serveur, ou soumettre le formulaire normalement
     document.getElementById('inscription-form').submit();
 }
}
