
<form id="createClassForm" action="{{route('createClass')}}" method="Post" role="form" class="red lighten-5">
        @csrf
        <h5>Ajouter un classe à votre évole</h5>
            <div class="inputs">
                <div class="input-field">
                    <input required name="className" type="text" class="validate">
                    <label for="className">Nom de la classe</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez le nom de la classe</span>
                </div>

                <div class="input-field">
                    <input required name="firstName" type="text" class="validate">
                    <label for="firstName">Prénom du professeur principal</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez le prénom du professeur principal</span>
                </div>

                <div class="input-field">
                    <input required name="lastName" type="text" class="validate">
                    <label for="email">Nom du professeur principal</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez le nom du professeur principal</span>
                </div>

                <div class="input-field">
                    <input required name="email" type="email" class="validate">
                    <label for="email">Mail du professeur principal</label>
                    <span class="helper-text" data-error="Invalide" data-success="Valide">Entrez le mail du professeur principal</span>
                </div>

                
            </div>

            <button type="submit" class="btn blue waves-effect">Enregister</button>
        </form>