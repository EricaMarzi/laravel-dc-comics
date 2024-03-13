<footer>
    <!--Upper Footer-->
    <div class="container">
        <div class="upper-footer">
            <div class="footer-list">
                @foreach(config('footerLinks') as $link)
                <div class="col">
                    <h3>{{$link['title']}}</h3>
                    <ul>
                        @foreach($link['links'] as $arrayurl)
                        <li><a href="#">{{$arrayurl['text']}}</a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
                <div class="logo-bg">
                    <img src="{{asset('images/dc-logo-bg.png')}}" alt="Logo">
                </div>
            </div>
        </div>
    </div>


    <!--Bottom Footer-->
    <div class="bottom-footer">
        <div class="container">
            <div class="flex">
                <button class="sing">Sign-up now!</button>
                <div class="follow-socials">
                    <ul>
                        <li>
                            <h2>Follow us</h2>
                        </li>

                        <li>
                            <a href="#">
                                <div class="social">
                                    <img src="{{asset('images/footer-facebook.png')}}" alt="Facebook">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="social">
                                    <img src="{{asset('images/footer-twitter.png')}}" alt="Twitter">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="social">
                                    <img src="{{asset('images/footer-youtube.png')}}" alt="YouTube">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="social">
                                    <img src="{{asset('images/footer-pinterest.png')}}" alt="Pinterest">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="social">
                                    <img src="{{asset('images/footer-periscope.png')}}" alt="Periscope">
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>