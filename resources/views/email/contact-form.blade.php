<x-layouts.app>
    <div class="card">
        <div class="card-header">
            Has recibido un mensaje desde el formulario de contacto
        </div>
        <div class="card-body">
            <h3 class="card-title">Datos del mensaje</h3>
            <p class="card-text"><b>Name:</b> {{ $data['name'] }}</p>
            <p class="card-text"><b>Telephone:</b> {{ $data['phone'] }}</p>
            <p class="card-text"><b>Email:</b> {{ $data['email'] }}.</p>
            <p class="card-text"><b>Subject:</b> {{ $data['subject'] }}.</p>
            <p class="card-text"><b>Message:</b> {{ $data['message'] }}.</p>
        </div>
    </div>
</x-layouts.app>

