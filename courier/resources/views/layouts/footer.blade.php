<footer class="footer bg-dark text-light">
    <div class="footer-top py-md-5 py-3 border-bottom">
        <div class="container">
            <div class="row">
                    <div class="col-lg-3 col-md-6"> 
                        <div class="footer-box ">
                            <h4 class="section-title">Importent Links</h4>
                            <ul class="list-unstyled footer-list">
                                <li><a href="{{ route('faqs') }}">FAQ</a></li>
                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                <li><a href="{{ route('about_us') }}">Our Goal</a></li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                <li><a href="{{ route('support') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6"> 
                        <div class="footer-box">
                            <h4 class="section-title">Quick Access</h4>
                            <ul class="list-unstyled footer-list">
                                <li><a href="{{ route('merchant.register') }}">Become Marchent</a></li>
                                <li><a href="{{ route('rider.register') }}">Become Rider</a></li>
                                <li><a href="{{ route('coverage_map') }}">Coverage Area</a></li>
                                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box">
                            <h4 class="section-title">How To Contact</h4>
                            <p>House : Sha-28, Adarsh Nagar, Badda, Dhaka 1212</p>
                            <a href="tel:01920020044">019200 200 44</a>
                            <a href="mailto:parcelgoal@gmail.com">parcelgoal@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6"> 
                        <div class="footer-box text-left">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('img/common/logo.png') }}" alt="logo" class="img-fluid">
                            </a>
                            <p>Parcel Goal is one of the leargest & trusted Delivery Platform in Bangladesh.
                            Currently we are operating in Dhaka, Soon We will announce nationwide.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-left order-md-1 order-2">Powerd by <a href="http://iosoup.com/" target="_blank">ioSoup</a></div>
                <div class="col-md-6 text-center text-md-right order-md-2 order-1"> Parcel Goal</div>
            </div>
        </div>
    </div>
</footer>