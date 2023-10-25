<!DOCTYPE html>
<html lang="en">

<head>
    @include('Layout.Head')
    <link rel="stylesheet" href="{{asset('Css/Careers.css')}}">
</head>

<body>
    <header>
        @include('Layout.Navbar')
        <div class="hero" data-aos="fade-down" data-aos-duration="1000"></div>
    </header>

    <main>
        <div class="spa">
            <img src="../images/career.jpg" alt="" />
        </div>
        <div class=" spa-details">
            <h1>BE PART OF THE HOTEL DEL LUNA FAMILY!</h1>
            <p>
                Take the FIRST step to a brighter career. Your journey toward endless
                possibilities begins at Hotel Del Luna! Join the Hotel Del Luna team
                by submitting your application now.
            </p>
        </div>
        <section class="deal_of_month" data-aos="zoom-in" data-aos-duration="1100">
            <div class="deal_right">
                <div class="deals">
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="../images/SOLEC.jpg" alt="family in a spa message" />
                            <div class="content_card_deal">
                                <div class="card_title">
                                    <h3>Career Opportunities at Hotel Del Luna</h3>
                                </div>
                                <div class="card_content">Parañaque City, Philippines</div>
                                <div class="deal_readmore">
                                    <a href="#"> <button class="deal_btn">Learn More</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="../images/Facade.jpg" alt="child and father swimming in the pool" />
                        </div>
                        <div class="content_card_deal">
                            <div class="card_title">
                                <h3>Career Opportunities at Hotel Del Luna North</h3>
                            </div>
                            <div class="card_content">
                                <p>Quezon City, Philippines</p>
                            </div>
                            <div class="deal_readmore">
                                <a href="#"> <button class="deal_btn">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="card_deal">
                        <div class="card_image_deal">
                            <img src="../images/Service-min.jpeg" alt="family swimming in the pool" />
                        </div>
                        <div class="content_card_deal">
                            <div class="card_title">
                                <h3>Take your FIRST step to a brighter career!</h3>
                            </div>
                            <div class="card_content">
                                <p>Take your FIRST step to a brighter career!</p>
                            </div>
                            <div class="deal_readmore">
                                <a href="#"> <button class="deal_btn">Learn More</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @include('Layout.Footer')
    @include('Layout.aos')
</body>

</html>