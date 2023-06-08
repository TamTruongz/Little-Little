@extends('index')
@section('content')

<main>
    <div class="title-contact">
        <img src="/images/Liên hệ.svg" alt="">
    </div>

    <div class="content-contact">
        <div class="contact-left">
            <div class="contact-left-egde">
                <p class="text-contact-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                    volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                </p>

                <form class="form-contact" action="#" method="post">
                    <div class="box-contact">
                        <input class="input-contact-1" type="text" placeholder="Tên">
                        <input class="input-contact-2" type="email" placeholder="Email">
                    </div>

                    <div class="box-contact">
                        <input class="input-contact-1" type="text" placeholder="Số điện thoại">
                        <input class="input-contact-2" type="text" placeholder="Địa chỉ">
                    </div>

                    <div class="box-contact">
                        <textarea name="" id="" cols="100" rows="4" placeholder="Lời nhắn"></textarea>
                    </div>

                    <div class="box-contact-button">
                        <button class="btn-contact" id="myBtn" type="submit">Gửi liên hệ</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="contact-right">
            <div class="item-contact-right">
                <div class="item-contact-right-egde">
                    <img src="/images/adress 1.svg" alt="">
                    <div class="text-item-contact-right">
                        <h1>Địa chỉ:</h1>
                        <p>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                    </div>
                </div>
            </div>

            <div class="item-contact-right">
                <div class="item-contact-right-egde">
                    <img src="/images/email.svg" alt="">
                    <div class="text-item-contact-right">
                        <h1>Email:</h1>
                        <p>investigate@your-site.com</p>
                    </div>
                </div>
            </div>

            <div class="item-contact-right">
                <div class="item-contact-right-egde">
                    <img src="/images/phone-1.svg" alt="">
                    <div class="text-item-contact-right">
                        <h1>Điện thoại:</h1>
                        <p>+84 145 689 798</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<img class="alex-contact-1" src="/images/Alex_AR_Lay_Do-shadow-1.svg" alt="" srcset="">

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div>
            <p>Gửi liên hệ thành công.
                Vui lòng kiên nhẫn đợi phản hồi từ chúng tôi, bạn nhé!</p>
        </div>
    </div>
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
@endsection