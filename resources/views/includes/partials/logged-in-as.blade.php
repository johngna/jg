@if(auth()->user() && session()->has("admin_user_id") && session()->has("temp_user_id"))
    <div class="alert alert-warning logged-in-as">
        Você está logado o usuário {{ auth()->user()->name }}. <a href="{{ route("frontend.auth.logout-as") }}">Voltar para {{ session()->get("admin_user_name") }}</a>.
    </div><!--alert alert-warning logged-in-as-->
@endif
