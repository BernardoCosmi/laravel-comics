<div class="bg-container">
    <div class="footer-container">
        <span>
            sign-up now!
        </span>
        <div class="icon-container">
            <span>follow us</span>
            <img src="{{ asset('images/footer-facebook.png') }}" alt="">
            <img src="{{ asset('images/footer-twitter.png') }}" alt="">
            <img src="{{ asset('images/footer-youtube.png') }}" alt="">
            <img src="{{ asset('images/footer-pinterest.png') }}" alt="">
            <img src="{{ asset('images/footer-periscope.png') }}" alt="">
        </div>
    </div>
</div>

<style>

.bg-container {
  background-color: #303030;
  width: 100%;
  height: 100px;
}

.footer-container {
  width: 80%;
  height: 100px;
  margin: 0 auto;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

span {
  text-transform: uppercase;
  background-color: #303030;
  border: 2px solid #0282F9;
  color: white;
  width: 150px;
  height: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.icon-container {
  display: flex;
  gap: 20px;
  
}
.icon-container > span {
    border: none;
    color: #0282F9;
    font-weight:800;
    width: auto;
    height: auto;
}
.icon-container > img{
    width:2rem;
    height:2rem;
}
</style>