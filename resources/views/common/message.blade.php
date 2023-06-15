@if($errors->has('abate'))
<script>
var modal = document.createElement('div');
modal.id = 'myModal-abate';
modal.classList.add('modal');

var modalContent = document.createElement('div');
modalContent.classList.add('modal-content-abate');

var closeBtn = document.createElement('span');
closeBtn.classList.add('close');
closeBtn.innerHTML = '&times;';

var header = document.createElement('div');
header.classList.add('header-modal-abate');

var emoji = document.createElement('img');
emoji.classList.add('emoji-abate');
emoji.src = '/images/Disappointed emoji Face.svg';
emoji.alt = '';

var body = document.createElement('div');
body.classList.add('body-modal-abate');

var message = document.createElement('p');
message.innerHTML =
    'Hình như đã có lỗi xảy ra khi thanh toán... <br> Vui lòng kiểm tra lại thông tin liên hệ, thông tin thẻ và thử lại.';

// Thêm các phần tử vào thẻ div mới
header.appendChild(emoji);
body.appendChild(message);
modalContent.appendChild(closeBtn);
modalContent.appendChild(header);
modalContent.appendChild(body);
modal.appendChild(modalContent);

// Thêm thẻ div mới vào trang web
document.body.appendChild(modal);

// Hiển thị popup lỗi
modal.style.display = 'block';

// Khi người dùng nhấn vào nút đóng, ẩn popup lỗi
closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
});

// Khi người dùng nhấp chuột ra ngoài popup, ẩn nó
window.addEventListener('click', function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});
</script>
@endif

@if(session('success'))
<script>
// Tạo một thẻ div mới cho popup lỗi
var modal = document.createElement('div');
modal.id = 'myModal-abate';
modal.classList.add('modal');

var modalContent = document.createElement('div');
modalContent.classList.add('modal-content-abate');

var closeBtn = document.createElement('span');
closeBtn.classList.add('close');
closeBtn.innerHTML = '&times;';

var header = document.createElement('div');
header.classList.add('header-modal-abate');

var emoji = document.createElement('img');
emoji.classList.add('emoji-abate');
emoji.src = '/images/icon-thanh-cong.png';
emoji.alt = '';

var body = document.createElement('div');
body.classList.add('body-modal-abate');

var message = document.createElement('p');
message.innerHTML = 'Thanh toán thành công !!';

// Thêm các phần tử vào thẻ div mới
header.appendChild(emoji);
body.appendChild(message);
modalContent.appendChild(closeBtn);
modalContent.appendChild(header);
modalContent.appendChild(body);
modal.appendChild(modalContent);

// Thêm thẻ div mới vào trang web
document.body.appendChild(modal);

// Hiển thị popup lỗi
modal.style.display = 'block';

// Khi người dùng nhấn vào nút đóng, ẩn popup lỗi
closeBtn.addEventListener('click', function() {
    modal.style.display = 'none';
});

// Khi người dùng nhấp chuột ra ngoài popup, ẩn nó
window.addEventListener('click', function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});
</script>
@endif

@if(session('contact_success') || session('contact_error'))
<div id="myModal" onclick="mousedown(event)">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div>
            <p>{{ (session('contact_success') !== null) ? session('contact_success') : session('contact_error') }}</p>
        </div>
    </div>
</div>
@endif
@if(session('success_TicketMail'))
<div id="myModal" onclick="mousedown(event)">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div>
            <p>{{ session('success_TicketMail') }}</p>
        </div>
    </div>
</div>
@endif