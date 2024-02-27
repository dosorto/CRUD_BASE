<!DOCTYPE html>
<html>
<head>
    <title>CRUD BASE </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>CRUD BASE</h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('personas')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    @section('script')
<script>
    window.addEventListener('close-modal', event => {

        $('#personaModal').modal('hide');
        $('#updatePersonaModal').modal('hide');
        $('#deletePersonaModal').modal('hide');
    });
    window.addEventListener('open-edit', event => {
        $('#updatePersonaModal').modal('show');
    });
</script>
@endsection
</body>
</html>