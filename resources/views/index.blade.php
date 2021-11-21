@extends('templates.base')

@section('title', 'Ini title')

@section('content')
<div class="container">
    <div class="container-chat my-3">
        <div class="message-box">
            pesan pertama
        </div>
        <div class="message-box">
            pesan kedua
        </div>
        <div class="message-box">
            pesan keempat
        </div>
        <div class="message-box">
            pesan kelima
        </div>
        <div class="message-box">
            pesan pertama
        </div>
        <div class="message-box">
            pesan kedua
        </div>
        <div class="message-box">
            pesan keempat
        </div>
        <div class="message-box">
            pesan kelima
        </div>
        <div class="message-box">
            pesan pertama
        </div>
        <div class="message-box">
            pesan kedua
        </div>
        <div class="message-box">
            pesan keempat
        </div>
        <div class="message-box">
            pesan kelima
        </div>
    </div>

    <form action="" method="post">
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>
</div>
@endsection

@section('javascript')
    <script type="text/javascript">
        console.log('hello world')
    </script>
@endsection


