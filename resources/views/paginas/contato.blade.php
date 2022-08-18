@extends('./paginas/mainds')

@section('container')

<section class="contato">
    <div class="container contato_container">
        <aside class="contato_aside">
            <div class="aside_imagem">
                <img src="../img/contact.svg">
            </div>
            <h2>Contate-nos</h2>
        <p>
            AHAHAHAHAHAHAHAHAHA
            AHAHAHAHAHAHAHAHAHAHHAHA
            AHAHAHAHAHAHAHAHAHAHHAH
            AHAHAHAHAHAHAHAHAHAHHAHAHA
        </p>
        <ul class="contato_detalhes">
            <li>
                <i class="uil uil-phone-times"></i>
                <h5>(649) 653-8269</h5>
            </li>
            <li>
                <i class="uil uil-envelope"></i>
                <h5>e067acad@cps.sp.gov.br</h5>
            </li>
            <li>
                <i class="uil uil-location-point"></i>
                <h5>Amparo, São paulo</h5>
            </li>
        </ul>
        <ul class="contato_socials">
            <li>
                <a href="https://www.instagram.com/etecjboficial/" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            </li>
            <li>
                <a href="https://www.facebook.com/etecjoaobelarminooficial/" target="_blank"><i class="uil uil-facebook-f"></i></a>
            </li>
            <li>
                <a href="https://twitter.com/etecjb" target="_blank"><i class="uil uil-twitter-alt"></i></a>
            </li>
        </ul>
        </aside>


        <form class="contato_form">
            <div class="form_nome">
                <input type="text" name="Primeiro Nome" placeholder="Primeiro Nome" required>
                <input type="text" name="Último Nome" placeholder="Último Nome" required>
            </div>
                <input type="email" name="Endereço de Email" placeholder="Seu Endereço de Email" required>
                <textarea name="Mensagem" rows="7" placeholder="Mensagem"></textarea>
                <button type="submit" class="btn btn-primary">Mande sua mensagem</button>
            </div>
        </form>
    </div>
</section>