<!DOCTYPE html>
<html lang="en">

<head>
    @include("Layout.Head")
    <link rel="stylesheet" href="{{ asset('Css/Reward.css')}}">
</head>

<body>
    <header>
        @include(" Layout.Navbar")
        <div class="hero" data-aos="fade-down" data-aos-duration="1000">
        </div>
    </header>

    <section class="reward py-3 px-4">
        <div data-aos="zoom-in" data-aos-duration="800">
            <h1>Rewards</h1>
            <p>
                Welcome to Hotel De Luna, where the living and departed converge in a
                realm of enchantment and secrets. Immerse yourself in an extraordinary
                experience that transcends the boundaries of the mortal world.
            </p>
        </div>
    </section>
    <main>
        <section class="reward_cards_section">
            <div data-aos="zoom-in" data-aos-duration="1000">
                <h1>REWARDS</h1>
                <p>
                    Experience a world of luxury at Hotel Del Luna and earn valuable
                    points with every purchase, check-in, and event attendance,
                    unlocking a realm of exclusive rewards and privileges."
                </p>
            </div>

            <div class="reward_card_design" data-aos="zoom-in" data-aos-duration="1000">
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />123 456 7890
                </p>
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />975 310 4826
                </p>
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />624 578 1930
                </p>
                <p class="reward_card">
                    <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                    <br />408 729 5613
                </p>
            </div>
        </section>

        <div class="main col-12" data-aos="fade-up" data-aos-duration="800">
            <h1>EARN & REDEEM RESORT DOLLARS</h1>
            <p>
                Earn Resort Dollarts with every purchase, check-in, renew Membership
                at any Hotel participating outlets and redeemthem during future
                purchases at the participating
            </p>

            <img src="{{ asset('Icons/icon-hand-with-dollar.svg')}}" width="50px" />
            <br />

            <strong>Earn instant Resort Dollars and redeem them for greater
                savings</strong>
            <p>
                Earn up to 20% of your total spend in Resort Dollars when you dine,
                shop & stay. Resort Dollars earned can be immediately redeemed during
                your next purchase.
            </p>

            <strong>Resort Dollars are as good as cash</strong>
            <p>
                Redeem Resort Dollars for shopping, dining, hotel stays and more at
                over 250 Sands participating outlets.
            </p>
        </div>

        <div class="Table-Content">
            <table class="table" data-aos="fade-up" data-aos-duration="800">
                <tr class="table-warning">
                    <th>Card</th>
                    <th>Card Tier</th>
                    <th>Where to Redeem</th>
                </tr>
                <tr>
                    <td>Luna Star Card</td>
                    <td>
                        <p class="reward_card_front_4">
                            <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                            <br />408 729 5613
                        </p>
                    </td>
                    <td>
                        Hotel stay, Banyan Tree Spa, attractions, entertainment, gift shops
                        and participating restaurants in Hodel Del Luna

                        <ul>
                            <li>10% discount on rooftop activities and services.</li>
                            <li>10% discount on rooftop activities and services.</li>
                            <li>Priority restaurant reservations.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Moonlight Elite Card</td>
                    <td>
                        <p class="reward_card_front_3">
                            <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                            <br />408 729 5613
                        </p>
                    </td>
                    <td>
                        Hotel stay, Banyan Tree Spa, attractions, entertainment, gift shops
                        and participating restaurants in Hodel Del Luna

                        <ul>
                            <li>15% discount on rooftop activities and services.</li>
                            <li>10% discount at all hotel shops.</li>
                            <li>0% bonus Hotel Del Luna credits on all purchases.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Celestial Platinum Card</td>
                    <td>
                        <p class="reward_card_front_2">
                            <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                            <br />408 729 5613
                        </p>
                    </td>
                    <td>
                        Hotel stay, Banyan Tree Spa, attractions, entertainment, gift shops
                        and participating restaurants in Hodel Del Luna

                        <ul>
                            <li>20% discount on rooftop activities and services.</li>
                            <li>15% discount at all hotel shops.</li>
                            <li>
                                Priority restaurant reservations with a complimentary welcome
                                drink and a complimentary dessert.
                            </li>
                            <li>Access to the platinum level of the hotel's clubs.</li>
                            <li>15% bonus Hotel Del Luna credits on all purchases.</li>
                            <li>Complimentary access to the hotel's spa facilities.</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>Eclipsia Diamond Card</td>
                    <td>
                        <p class="reward_card_front_1">
                            <i><img src="https://res.cloudinary.com/dk0ystu6k/image/upload/v1705313941/favicon_sa2lmw.ico" /></i>
                            <br />408 729 5613
                        </p>
                    </td>
                    <td>
                        Hotel stay, Banyan Tree Spa, attractions, entertainment, gift shops
                        and participating restaurants in Hodel Del Luna

                        <ul>
                            <li>25% discount on rooftop activities and services.</li>
                            <li>20% discount at all hotel shops.</li>
                            <li>
                                Exclusive priority restaurant reservations with a complimentary
                                welcome drink, appetizer, and dessert.
                            </li>
                            <li>
                                Access to the exclusive diamond level of the hotel's clubs.
                            </li>
                            <li>20% bonus Hotel Del Luna credits on all purchases.</li>
                            <li>Complimentary spa treatment of choice during each stay.</li>
                        </ul>
                    </td>
                </tr>
            </table>
            <div class="join_membership" data-aos="zoom-in" data-aos-duration="800">
                <h2>Hotel Del Luna LifeStyle Membership</h2>
                <h3><a href="/Sign_Up_Sign_In">JOIN FOR FREE</a></h3>
            </div>
        </div>
    </main>

    @include("Layout.Footer")
    @include("Layout.aos")
</body>

</html>