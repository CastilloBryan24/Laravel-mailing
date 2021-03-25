<form action="/mail/store" method="POST" class="mt-5">
    @csrf
    <label for="">Email</label>
    <input type="text">
    <label for="">Message</label>
    <input type="text">
    <button type="submit">Envoyez</button>
</form>