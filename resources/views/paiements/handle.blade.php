<x-layout>
    <x-slot name="header">
        <div class="row text-center">
            <i class="fa fa-spinner fa-pulse fa-10x"></i>
            <div class="text-danger text-center mt-2">
                <b>Veuillez patienter pendant le chargement de la page</b>
            </div>
        </div>

    </x-slot>
</x-layout>

<script src="https://cdn.kkiapay.me/k.js"></script>

<script>
    reference = 120;
    openKkiapayWidget({
        amount: "{{ $planTarifaire->price }}",
        position: "center",
        data: reference,
        name: "Jo",
        callback: "{{ route('paiements.validatePaiement', 1) }}",
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
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
