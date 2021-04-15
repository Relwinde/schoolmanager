
<form id="createClassForm" action="{{route ('createPupil')}}" method="Post" role="form" class="red lighten-5">
        @csrf
        <h5>Ajouter un élève à votre classe</h5>
            <div class="inputs">
                <div class="input-field">
                    <input required name="firstName" type="text" class="validate">
                    <label for="firstName">Prénom</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez le prénom de l'élève</span>
                </div>

                <div class="input-field">
                    <input required name="lastName" type="text" class="validate">
                    <label for="email">Nom</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez le nom  l'élève</span>
                </div>

                <div class="input-field">
                    <input required name="email" type="email" class="validate">
                    <label for="email">Mail</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez le mail de l'élève</span>
                </div>
                
            </div>

            <button type="submit" class="btn blue waves-effect">Enregister</button>
        </form>