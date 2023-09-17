<form action="{{ route('storeCarteZ') }}" method="POST"
    class="card lg:glass  flex-shrink-0 w-full max-w-full shadow-2xl bg-base-100">
    @csrf
    <div class="card-body flex flex-col ">
        <p class=" divider text-xs text-gray-400">* A propos du détenteur de la carte ZETCHA</p>
        <div class="flex flex-row space-x-3">

            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text text-white">Nom</span>
                </label>
                <input wire:model="carte.last_name" name="last_name" type="text" placeholder="nom / lastname"
                    class="input  " />
                @error('carte.last_name')
                    <div class="text-sm text-red-700">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text text-white">Prénoms</span>
                </label>
                <input wire:model="carte.first_name" name="first_name" type="text" placeholder="prenoms / firstname"
                    class="input" />
                @error('carte.first_name')
                    <div class="text-sm text-red-700">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Photo</span>
                </label>
                <input type="file" class="file-input file-input-bordered file-input-info w-full max-w-xs" />
                @error('carte.picture')
                    <div class="text-sm text-red-700">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <p class="divider mt-2 text-xs text-gray-400">* Informations Professionnelles</p>

        <div class="card bg-base-100 shadow-2xl mx-auto space-x-2 px-2 grid grid-flow-col auto-cols-fr gap-4">
            <label class="label my-auto">
                <span class="label-text text-white">Fonctions:</span>
            </label>
            @foreach ($fonctions as $index => $value)
                <div class=" pt-2 indicator  form-control w-full">

                    @if (count($fonctions) > 1)
                        <button type="button" wire:click="removeFonction({{ $index }})"
                            class="indicator-item badge badge-error">-</button>
                    @endif
                    <input wire:model="fonctions.{{ $index }}.name" name="fonctions[{{ $index }}][name]"
                        type="text" class="input" placeholder="CEO">
                </div>
            @endforeach
            <button type="button" wire:click="addFonction()" class="my-auto indicator-item badge badge-info">+
                Add</button>


        </div>
        <div class="card ">
            <div class="flex flex-row space-x-3">
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">Nom de l'Entrprise</span>
                    </label>
                    <input name="enterprise_name" type="text" placeholder="enterprise name" class="input  " />
                </div>

                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">Adresse de l'Entreprise</span>
                    </label>
                    <input name="enterprise_address" type="text" placeholder="enterprise adress" class="input  " />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">Email</span>
                    </label>
                    <input name="mail" type="email" placeholder="email" class="input  " />
                </div>
            </div>

            <div class="flex flex-row space-x-3">
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">Téléphone Principal</span>
                    </label>
                    <input name="phone_number1" type="tel" placeholder="main phone_number" class="input  " />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">Téléphone Secondaire</span>
                    </label>
                    <input name="phone_number2" type="tel" placeholder="secondary phone_number" class="input  " />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">Facebook</span>
                    </label>
                    <input name="lien_facebook" type="url" placeholder="facebook" class="input  " />
                </div>
            </div>

            <div class="flex flex-row space-x-3">
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">X (Twitter)</span>
                    </label>
                    <input name="lien_twitter" type="url" placeholder="x (twitter)" class="input  " />
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text text-white">Linkedin</span>
                    </label>
                    <input name="lien_linkedin" type="url" placeholder="linkedin" class="input  " />
                </div>
            </div>
        </div>
        <p class="divider mt-2 text-xs text-gray-400">* Informations du Client</p>
        <div class="flex flex-row space-x-3">

            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text text-white">Nom & Prenom</span>
                </label>
                <input wire:model="author.name" name="author.name" type="text" placeholder="nom / lastname"
                    class="input  " required />
                @error('author.name')
                    <div class="text-sm text-red-700">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control w-full">
                <label class="label">
                    <span class="label-text text-white">Email</span>
                </label>
                <input wire:model="author.email" name="author.email" type="email" placeholder="Email" required
                    class="input" />
                @error('author.email')
                    <div class="text-sm text-red-700">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-control w-full max-w-xs">
                <label class="label">
                    <span class="label-text">Telephone</span>
                </label>
                <input wire:model="author.phone_number" name="author.phone_number" type="tel"
                    placeholder="phone" required class="input" />
                @error('author.phone_number')
                    <div class="text-sm text-red-700">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-control mt-6">
            <button type="submit" name="plan_tarifaire_id" id="launch-button" value="{{ $planTarifaire->id }}"
                class="btn btn-primary capitalize ">Soumettre</button>
        </div>
    </div>
</form>
<script src="https://cdn.kkiapay.me/k.js"></script>
{{-- <scriptamount="$planTarifaire->price"callback="route('storeCarteZ')" data="" url="/" position="center"
    theme="#0095ff" sandbox="true" key="{{ config('services.kkiapay.public_key') }}" src="https://cdn.kkiapay.me/k.js">
</script> --}}

{{-- <script>
    document.getElementById("launch-button").addEventListener("click", function() {
        // Sélectionnez le widget Kkiapay par son ID
        openKkiapayWidget({
            amount: "{{ $planTarifaire->price }}",
            position: "center",
            data: "",
            name: "Jo",
            callback: "{{ route('home') }}",
            theme: "#0095ff",
            sandbox: "true",
            key: "{{ config('services.kkiapay.public_key') }}",
        });

        addPaymentEndListener(response => {
            swal({
                title: "Merci de ne pas quitter cette page.",
                text: "traitement des données...",
                icon: "https://www.boasnotas.com/img/loading2.gif",
                buttons: false,
                closeOnClickOutside: false,
                //timer: 3000,
                //icon: "success"
            });
        });
    });
</script> --}}
