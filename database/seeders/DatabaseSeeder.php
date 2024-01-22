<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Restaurant;
use App\Models\Room;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('room_types')->insert([
            ['room_type_id' => 1,'room_name' => 'Premier Suite', 'intro_description' => 'Host intimate dinners at the 4-seater dining table. Rejuvenate your senses in the luxurious 2-person marble bathtub. Get ready for any occasion with a walk-in wardrobe and dedicated dressing table.', 'description' => 'Come home to a sophisticated urban sanctuary. Host intimate dinners at the 4-seater dining table, paired with artisanal tea, international snacks and an extensive selection of wine, beer and pre-mixed cocktails from the bespoke Armoire and cocktail trolley.
            Rejuvenate your senses in the spa-like bathroom, featuring a luxurious 2-person marble bathtub. Freshen up at the spacious separate vanities and get ready for any occasion with a walk-in wardrobe and dedicated dressing table.', 'terms_and_conditions' => 'Images and virtual tours are for illustrative purposes only. Actual room size and furniture may differ.
            Maximum of 3 guests per room.
            Minimum 1 adult; any combination of adults and children not exceeding 3 guests in total.
            Charges apply from the 3rd staying adult.
            Children who are 12 or younger sleep for free in the existing bedding of a shared room with a paying adult. Fees apply should a rollaway bed be required.
            ^Charges apply for all the snacks, beverages and alcohol in the Armoire and cocktail trolley.'],
            ['room_type_id' => 2 ,'room_name' => 'Family Suite', 'intro_description' => 'Travelling with the little ones is a breeze with the fully equipped kitchenette and washer. Create cherished memories and enjoy endless hours of family fun with our exclusively curated Adventure Pack.', 'description' => 'Designed with the whole family’s needs and wants in mind, the Sands Family Suite makes travelling with your little ones a breeze. Whip up meals in the spacious kitchenette, complete with a child-friendly table and flatware. Explore Singapore with our exclusively curated Adventure Pack featuring Rori, a brave little plush lion.', 'terms_and_conditions' => 'Images and virtual tour are for illustrative purposes only. Actual room size and furniture may differ.
            Maximum of 2 adults and 2 children per room.
            ^Except for the complimentary kid-friendly snacks and beverages, charges apply for all other snacks, beverages and alcohol in the Armoire and cocktail trolley.'],
            ['room_type_id' => 3, 'room_name' => 'Premier Studio', 'intro_description' => 'Lounge comfortably on the plush 2-seater sofa in your elegant room and set the mood with integrated smart technology. Style your holiday outfits with ease in the generously sized walk-in wardrobe.', 'description' => 'Lounge comfortably on the plush 2-seater sofa in your elegant room, equipped with a 75” TV and integrated with smart technology. The bespoke Armoire and cocktail trolley are well-stocked with artisanal tea, international snacks and an extensive selection of wine, beer and soda, along with pre-mixed cocktails.
            Freshen up in the spacious bathroom, fitted with a luxurious bathtub, rain shower and separate vanities for extra privacy. The generously sized walk-in wardrobe makes dressing up an indulgent affair.', 'terms_and_conditions' => 'Images and virtual tours are for illustrative purposes only. Actual room size and furniture may differ.
            Maximum of 3 guests per room.
            Minimum 1 adult; any combination of adults and children not exceeding 3 guests in total.
            Charges apply from the 3rd staying adult.
            Children who are 12 or younger sleep for free in the existing bedding of a shared room with a paying adult. Fees apply should a rollaway bed be required.
            ^Charges apply for all the snacks, beverages and alcohol in the Armoire and cocktail trolley.'],
            ['room_type_id' => 4, 'room_name' => 'Signature Suite', 'intro_description' => 'Stir up conversations at the Social Bar, or host dinners at the 6-seater dining table. Endless hours of entertainment await in our iconic residential-style suite, designed for nights of revelry.', 'description' => 'Feel right at home in the Sands Collection’s finest suite, designed for nights of revelry. Stir up meaningful conversations over cocktails, wines or spirits at the Social Bar, or host dinners at the 6-seater dining table. Available in 3 room variations — Pool Table, Media Room or Entertainment Den — to suit your entertainment needs.', 'terms_and_conditions' => 'Images and virtual tours are for illustrative purposes only. Actual room size and furniture may differ.
Maximum of 3 guests per room.
Minimum 1 adult; any combination of adults and children not exceeding 3 guests in total.
Charges apply from the 3rd staying adult.
Children who are 12 or younger sleep for free in the existing bedding of a shared room with a paying adult. Fees apply should a rollaway bed be required.
^Charges apply for all the snacks, beverages and alcohol in the Armoire and cocktail trolley.
Upon successful booking of the Sands Signature Suite, contact +65 6688 8888 to request for your desired room type, subject to availability.'],
            ['room_type_id' => 5, 'room_name' => 'Premier Room', 'intro_description' => 'Unwind in your elegant room and savour the generous curation of treasures in the bespoke Armoire. Expect beautifully appointed in-room amenities and an expansive shower, fitted with separate vanities.', 'description' => 'Unwind in your elegant room, equipped with a 75” TV and integrated with smart technology. The bespoke Armoire and cocktail trolley are well-stocked with artisanal tea, international snacks and an extensive selection of wine, beer and soda, along with pre-mixed cocktails. Freshen up in the spacious bathroom, fitted with a luxurious bathtub, rain shower and separate vanities.', 'terms_and_conditions' => 'Images and virtual tours are for illustrative purposes only. Actual room size and furniture may differ.
            Maximum of 3 guests per room.
            Minimum 1 adult; any combination of adults and children not exceeding 3 guests in total.
            Charges apply from the 3rd staying adult.
            Children who are 12 or younger sleep for free in the existing bedding of a shared room with a paying adult. Fees apply should a rollaway bed be required.
            ^Charges apply for all the snacks, beverages and alcohol in the Armoire and cocktail trolley.'],
            ['room_type_id' => 6, 'room_name' => 'Deluxe Room', 'intro_description' => 'Wake up to magnificent views of Gardens by the Bay or the city in your room with floor-to-ceiling windows.', 'descriptiont' => 'Wake up to magnificent views of Gardens by the Bay or the city in your room with floor-to-ceiling windows. Enjoy privileged access to our world-famous Infinity Pool and all the modern conveniences, while the Central Business District is right at your doorstep.', 'terms_and_conditions' => 'Images are for illustrative purposes only. Actual room size and furniture may differ.

            Maximum of 3 guests per room.

            Minimum 1 adult; any combination of adults and children not exceeding 3 guests in total.

            Charges apply from the 3rd staying adult.

            Children who are 12 or younger sleep for free in the existing bedding of a shared room with a paying adult. Fees apply should a rollaway bed be required. To request for a rollaway bed, email room.reservations@marinabaysands.com.

            ^Walk-out balcony is only available in rooms facing Gardens by the Bay.'],
            ['room_type_id' => 7, 'room_name' => 'Premier Room Classic', 'intro_description' => 'Retreat into your private haven, fitted with a deep soaking bathtub to soothe away the day’s tension', 'descriptiont' => 'Retreat into your private haven, fitted with a deep soaking bathtub to soothe away the day’s tension. Enjoy privileged access to our world-famous Infinity Pool and all the modern conveniences, while the Central Business District is right at your doorstep.', 'terms_and_conditions' => 'Images are for illustrative purposes only. Actual room size and furniture may differ.

            Maximum of 3 guests per room.

            Minimum 1 adult; any combination of adults and children not exceeding 3 guests in total.

            Charges apply from the 3rd staying adult.

            Children who are 12 or younger sleep for free in the existing bedding of a shared room with a paying adult. Fees apply should a rollaway bed be required.

            ^Walk-out balcony is only available in rooms facing Gardens by the Bay.'],
            ['room_type_id' => 8, 'room_name' => '', 'intro_description' => '', 'descriptiont' => '', 'terms_and_conditions' => ''],
        ]);

        DB::table('amenities')->insert([
            ['amenities_id' => 1, 'room_type_id' => 1, 'amenities_type' => 'Living Room', 'amenities_list' => '75 Samsung Television wiwth Yamaha Sound Bar'],
            ['amenities_id' => 2, 'room_type_id' => 1, 'amenities_type' => 'Living Room', 'amenities_list' => 'Bespok Amrmoire & cocktail trolley'],
            ['amenities_id' => 3, 'room_type_id' => 1, 'amenities_type' => 'Living Room', 'amenities_list' => 'Integrated smart in-room technology'],
            ['amenities_id' => 4, 'room_type_id' => 1, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Frette bed linen'],
            ['amenities_id' => 5, 'room_type_id' => 1, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Bang & Olufson bluetooth speaker at bedside'],
            ['amenities_id' => 6, 'room_type_id' => 1, 'amenities_type' => 'Walk-in Wardrobe', 'amenities_list' => 'Cladded Dyson hair dryer'],
            ['amenities_id' => 7, 'room_type_id' => 1, 'amenities_type' => 'Walk-in Wardrobe', 'amenities_list' => 'Terry bathrobe'],
            ['amenities_id' => 8, 'room_type_id' => 1, 'amenities_type' => 'Walk-in Wardrobe', 'amenities_list' => 'Shoe shine'],
            ['amenities_id' => 9, 'room_type_id' => 1, 'amenities_type' => 'Bathroom', 'amenities_list' => '2-person marble bathtub'],
            ['amenities_id' => 10, 'room_type_id' => 1, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Rain shower, handheld shower, bench'],
            ['amenities_id' => 11, 'room_type_id' => 1, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Separate bathroom vanities'],
            ['amenities_id' => 12, 'room_type_id' => 1, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Rivolta Carmignani terry'],
            ['amenities_id' => 13, 'room_type_id' => 1, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Bvlgari bath amenities'],
            ['amenities_id' => 14, 'room_type_id' => 1, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '95 sqm on average'],
            ['amenities_id' => 15, 'room_type_id' => 1, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Up to 3 guests'],
            ['amenities_id' => 16, 'room_type_id' => 1, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '1 king bed / 2 queen beds'],
            ['amenities_id' => 17, 'room_type_id' => 2, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '75 – 95 sqm on average'],
            ['amenities_id' => 18, 'room_type_id' => 2, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Up to 4 guests'],
            ['amenities_id' => 19, 'room_type_id' => 2, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '2 bedrooms'],
            ['amenities_id' => 20, 'room_type_id' => 2, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Sofa bed in the living room, bunk beds in kids’ room & king bed in bedroom'],
            ['amenities_id' => 21, 'room_type_id' => 2, 'amenities_type' => 'Living Room', 'amenities_list' => '75’’ Samsung Television with Yamaha Sound Bar'],
            ['amenities_id' => 22, 'room_type_id' => 2, 'amenities_type' => 'Living Room', 'amenities_list' => 'Kitchenette with child-friendly table and flatware'],
            ['amenities_id' => 23, 'room_type_id' => 2, 'amenities_type' => 'Living Room', 'amenities_list' => 'Integrated smart in-room technology'],
            ['amenities_id' => 24, 'room_type_id' => 2, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Frette bed linen'],
            ['amenities_id' => 25, 'room_type_id' => 2, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Bang & Olufson bluetooth speaker at bedside'],
            ['amenities_id' => 26, 'room_type_id' => 2, 'amenities_type' => 'Kids Room', 'amenities_list' => 'Nintendo Switch and Apple TV'],
            ['amenities_id' => 27, 'room_type_id' => 2, 'amenities_type' => 'Kids Room', 'amenities_list' => 'Kid-sized robes, slippers, hooded towels'],
            ['amenities_id' => 28, 'room_type_id' => 2, 'amenities_type' => 'Kids Room', 'amenities_list' => 'Curated Adventure Pack'],
            ['amenities_id' => 29, 'room_type_id' => 2, 'amenities_type' => 'Bathroom', 'amenities_list' => '2-person bathtub'],
            ['amenities_id' => 30, 'room_type_id' => 2, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Rain shower, handheld shower, bench'],
            ['amenities_id' => 31, 'room_type_id' => 2, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Kid-friendly bath essentials'],
            ['amenities_id' => 32, 'room_type_id' => 2, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Diaper bin'],
            ['amenities_id' => 33, 'room_type_id' => 2, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Bvlgari bath amenities'],
            ['amenities_id' => 34, 'room_type_id' => 3, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '70 sqm on average'],
            ['amenities_id' => 35, 'room_type_id' => 3, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Up to 3 guests'],
            ['amenities_id' => 36, 'room_type_id' => 3, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '1 king bed'],
            ['amenities_id' => 37, 'room_type_id' => 3, 'amenities_type' => 'Bedroom', 'amenities_list' => ''],
            ['amenities_id' => 38, 'room_type_id' => 3, 'amenities_type' => 'Living Room', 'amenities_list' => 'Frette bed linen'],
            ['amenities_id' => 39, 'room_type_id' => 3, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Integrated smart in-room technology'],
            ['amenities_id' => 40, 'room_type_id' => 3, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Bang & Olufson bluetooth speaker at bedside'],
            ['amenities_id' => 41, 'room_type_id' => 3, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Rain Shower, handheld shower, bench'],
            ['amenities_id' => 42, 'room_type_id' => 3, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Separate bathroom vanities'],
            ['amenities_id' => 43, 'room_type_id' => 3, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Rivolta Carmignani terry'],
            ['amenities_id' => 44, 'room_type_id' => 3, 'amenities_type' => 'Bathroom', 'amenities_list' => 'Salvatore Ferragamo bath amenities'],
            ['amenities_id' => 45, 'room_type_id' => 4, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '140 sqm on average'],
            ['amenities_id' => 46, 'room_type_id' => 4, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Up to 3 guests'],
            ['amenities_id' => 47, 'room_type_id' => 4, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '1 bedroom with king bed'],
            ['amenities_id' => 48, 'room_type_id' => 4, 'amenities_type' => 'Living Room', 'amenities_list' => '85’’ Samsung Television with Yamaha Sound Bar'],
            ['amenities_id' => 49, 'room_type_id' => 4, 'amenities_type' => 'Living Room', 'amenities_list' => 'Bespoke Armoire & cocktail trolley^'],
            ['amenities_id' => 50, 'room_type_id' => 4, 'amenities_type' => 'Living Room', 'amenities_list' => 'Integrated smart in-room technology'],
            ['amenities_id' => 51, 'room_type_id' => 4, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Frette bed linen'],
            ['amenities_id' => 52, 'room_type_id' => 4, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Bang & Olufson bluetooth speaker at bedside'],
            ['amenities_id' => 53, 'room_type_id' => 4, 'amenities_type' => 'Walk-in Wardrobe', 'amenities_list' => 'Cladded Dyson hair dryer'],
            ['amenities_id' => 54, 'room_type_id' => 4, 'amenities_type' => 'Living Room', 'amenities_list' => 'Terry bathrobe'],
            ['amenities_id' => 55, 'room_type_id' => 4, 'amenities_type' => 'Living Room', 'amenities_list' => 'Shoe shine'],
            ['amenities_id' => 56, 'room_type_id' => 4, 'amenities_type' => 'Bathroom', 'amenities_list' => '2-person marble bathtub'],
            ['amenities_id' => 57, 'room_type_id' => 4, 'amenities_type' => 'Bathrom', 'amenities_list' => 'Rain shower, handheld shower, bench'],
            ['amenities_id' => 58, 'room_type_id' => 4, 'amenities_type' => 'Bathrom', 'amenities_list' => 'Separate bathroom vanities'],
            ['amenities_id' => 59, 'room_type_id' => 4, 'amenities_type' => 'Bathrom', 'amenities_list' => 'Rivolta Carmignani terry'],
            ['amenities_id' => 60, 'room_type_id' => 4, 'amenities_type' => 'Bathrom', 'amenities_list' => 'Bvlgari bath amenities'],
            ['amenities_id' => 61, 'room_type_id' => 5, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Frette bed linen'],
            ['amenities_id' => 62, 'room_type_id' => 5, 'amenities_type' => 'Bedroom', 'amenities_list' => 'Bang & Olufson bluetooth speaker at bedside'],
            ['amenities_id' => 63, 'room_type_id' => 5, 'amenities_type' => 'Living Room', 'amenities_list' => 'Integrated smart in-room technology'],
            ['amenities_id' => 64, 'room_type_id' => 5, 'amenities_type' => 'bathroom', 'amenities_list' => 'Rain Shower, handheld shower, bench'],
            ['amenities_id' => 65, 'room_type_id' => 5, 'amenities_type' => 'bathroom', 'amenities_list' => 'Separate bathroom vanities'],
            ['amenities_id' => 66, 'room_type_id' => 5, 'amenities_type' => 'bathroom', 'amenities_list' => 'Rivolta Carmignani terry'],
            ['amenities_id' => 67, 'room_type_id' => 5, 'amenities_type' => 'bathroom', 'amenities_list' => 'Salvatore Ferragamo bath amenities'],
            ['amenities_id' => 68, 'room_type_id' => 6, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '35 sqm on average'],
            ['amenities_id' => 69, 'room_type_id' => 6, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Up to 3 guests'],
            ['amenities_id' => 70, 'room_type_id' => 6, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '1 king bed / 2 twin beds'],
            ['amenities_id' => 71, 'room_type_id' => 6, 'amenities_type' => 'Living Room', 'amenities_list' => 'Executive work desk'],
            ['amenities_id' => 72, 'room_type_id' => 6, 'amenities_type' => 'Living Room', 'amenities_list' => 'Interactive flatscreen TV with cable channels'],
            ['amenities_id' => 73, 'room_type_id' => 6, 'amenities_type' => 'Living Room', 'amenities_list' => 'Bathroom with glass-enclosed shower'],
            ['amenities_id' => 74, 'room_type_id' => 6, 'amenities_type' => 'Living Room', 'amenities_list' => 'Luxury bathroom amenities'],
            ['amenities_id' => 75, 'room_type_id' => 7, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '40 sqm on average'],
            ['amenities_id' => 76, 'room_type_id' => 7, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Up to 3 guests'],
            ['amenities_id' => 77, 'room_type_id' => 7, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '1 king bed / 2 queen beds '],
            ['amenities_id' => 78, 'room_type_id' => 7, 'amenities_type' => 'Living Room', 'amenities_list' => 'Executive work desk'],
            ['amenities_id' => 79, 'room_type_id' => 7, 'amenities_type' => 'Living Room', 'amenities_list' => 'Interactive flatscreen TV with cable channels'],
            ['amenities_id' => 80, 'room_type_id' => 7, 'amenities_type' => 'Living Room', 'amenities_list' => 'Luxury bathroom amenities'],
            ['amenities_id' => 81, 'room_type_id' => 5, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '35 sqm on average'],
            ['amenities_id' => 82, 'room_type_id' => 5, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => 'Up to 3 guests'],
            ['amenities_id' => 83, 'room_type_id' => 5, 'amenities_type' => 'Size & Occupancy', 'amenities_list' => '1 king bed / 2 twin beds'],
        ]);

        DB::table('key_features')->insert([
            ['key_feature_id' => 1,'room_type_id' => 1, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705663009/Room/sands-premier-suite/KEY%20FEATURES/key-feature-living-room_ugeaij.jpg', 'key_feature_description' => 'Separate living room with 75’’ Samsung Television and Yamaha Sound Bar'],
            ['key_feature_id' => 2,'room_type_id' => 1, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705663007/Room/sands-premier-suite/KEY%20FEATURES/key-feature-dining_dztbta.jpg', 'key_feature_description' => '4-seater dining table'],
            ['key_feature_id' => 3,'room_type_id' => 1, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705663011/Room/sands-premier-suite/KEY%20FEATURES/key-feature-wardrobe_wn1fu2.jpg', 'key_feature_description' => 'Walk-in wardrobe'],
            ['key_feature_id' => 4,'room_type_id' => 2, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665234/Room/sands-premier-family-suite/KEY%20FEATURES/key-feature-living-room_wous8y.jpg', 'key_feature_description' => 'Living room with kitchenette'],
            ['key_feature_id' => 5,'room_type_id' => 2, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665218/Room/sands-premier-family-suite/KEY%20FEATURES/key-feature-bunk-bed_a9g7np.jpg', 'key_feature_description' => 'Kids’ room with bunk beds'],
            ['key_feature_id' => 6,'room_type_id' => 2, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665221/Room/sands-premier-family-suite/KEY%20FEATURES/key-feature-toddler-chair_q9mnol.jpg', 'key_feature_description' => 'Toddler-friendly high chair'],
            ['key_feature_id' => 7,'room_type_id' => 3, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666555/Room/sands-premier-studio/Key%20features/key-feature-armoire_tljpmn.jpg', 'key_feature_description' => 'Bespoke Armoire & cocktail trolley^'],
            ['key_feature_id' => 8,'room_type_id' => 3, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666559/Room/sands-premier-studio/Key%20features/key-feature-tv_tfhrl0.jpg', 'key_feature_description' => '75’’ Samsung television with Yamaha sound bar'],
            ['key_feature_id' => 9,'room_type_id' => 3, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666552/Room/sands-premier-studio/Key%20features/key-feature-bathtub_b6dnrw.jpg', 'key_feature_description' => '2-person bathtub'],
            ['key_feature_id' => 10,'room_type_id' => 4, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667833/Room/sands-premier-signature/SUITE%20TYPES/suite-type-pool-table_qw8swx.jpg', 'key_feature_description' => 'Pool Table'],
            ['key_feature_id' => 11,'room_type_id' => 4, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667830/Room/sands-premier-signature/SUITE%20TYPES/suite-type-media-room_gfxhkt.jpg', 'key_feature_description' => 'Media Room'],
            ['key_feature_id' => 12,'room_type_id' => 4, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667828/Room/sands-premier-signature/SUITE%20TYPES/suite-type-entertainment-den_tzmhpl.jpg', 'key_feature_description' => 'Entertainment Den'],
            ['key_feature_id' => 13,'room_type_id' => 5, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705669106/Room/sands-premier-room/PREMIER%20KEY/key-feature-armoire_cb7yca.jpg', 'key_feature_description' => 'Bespoke Armoire & cocktail trolley^'],
            ['key_feature_id' => 14,'room_type_id' => 5, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705669112/Room/sands-premier-room/PREMIER%20KEY/key-feature-tv_mxje2d.jpg', 'key_feature_description' => '75’’ Samsung television with Yamaha sound bar'],
            ['key_feature_id' => 15,'room_type_id' => 5, 'key_feature_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705669110/Room/sands-premier-room/PREMIER%20KEY/key-feature-bath_tslkde.jpg', 'key_feature_description' => '2-person bathtub'],
            ['key_feature_id' => 16,'room_type_id' => 6, 'key_feature_picture' => '', 'key_feature_description' => 'Expansive views of the city or Gardens by the Bay'],
            ['key_feature_id' => 17,'room_type_id' => 6, 'key_feature_picture' => '', 'key_feature_description' => 'Walk-out balcony^'],
            ['key_feature_id' => 18,'room_type_id' => 7, 'key_feature_picture' => '', 'key_feature_description' => 'Spacious bathroom with glass-enclosed shower & deep soaking bathtub'],
            ['key_feature_id' => 19,'room_type_id' => 7, 'key_feature_picture' => '', 'key_feature_description' => 'Expansive views of the city or Gardens by the Bay'],
            ['key_feature_id' => 20,'room_type_id' => 7, 'key_feature_picture' => '', 'key_feature_description' => 'Walk-out balcony^'],
        ]);

        DB::table('room_gallaries')->insert([
            ['room_gallary_id' => 1, 'room_type_id' => '1', 'view' => 'Garden view', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705662996/Room/sands-premier-suite/sands-premier-suite_2_e6mmou.jpg'],
            ['room_gallary_id' => 2, 'room_type_id' => '1',  'view' => 'Garden view', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705662995/Room/sands-premier-suite/sands-premier-suite_1_tu4ahl.jpg'],
            ['room_gallary_id' => 3, 'room_type_id' => '1', 'view' => 'All',  'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705662998/Room/sands-premier-suite/sands-premier-suite_3_c2dleo.jpg'],
            ['room_gallary_id' => 4, 'room_type_id' => '1', 'view' => 'All',  'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705663005/Room/sands-premier-suite/sands-premier-suite_7_agfgr7.jpg'],
            ['room_gallary_id' => 5, 'room_type_id' => '1', 'view' => 'All',  'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705663003/Room/sands-premier-suite/sands-premier-suite_6_wntczx.jpg'],
            ['room_gallary_id' => 6, 'room_type_id' => '1', 'view' => 'All',  'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705663001/Room/sands-premier-suite/sands-premier-suite_5_w5uyi4.jpg'],
            ['room_gallary_id' => 7, 'room_type_id' => '1', 'view' => 'All', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705662999/Room/sands-premier-suite/sands-premier-suite_4_hhoi5c.jpg'],
            ['room_gallary_id' => 8, 'room_type_id' => '2', 'view' => 'Garden View','room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665232/Room/sands-premier-family-suite/sands-premier-family-suite_7_jluisy.jpg'],
            ['room_gallary_id' => 9, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665229/Room/sands-premier-family-suite/sands-premier-family-suite_6_nexbcb.jpg'],
            ['room_gallary_id' => 10, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665227/Room/sands-premier-family-suite/sands-premier-family-suite_10_xdjat4.jpg'],
            ['room_gallary_id' => 11, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665225/Room/sands-premier-family-suite/sands-premier-family-suite_2_vf0rkn.jpg'],
            ['room_gallary_id' => 12, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665223/Room/sands-premier-family-suite/sands-premier-family-suite_9_plyutz.jpg'],
            ['room_gallary_id' => 13, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665216/Room/sands-premier-family-suite/sands-premier-family-suite_8_km5yki.jpg'],
            ['room_gallary_id' => 14, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665214/Room/sands-premier-family-suite/sands-premier-family-suite_5_f2rslx.jpg'],
            ['room_gallary_id' => 15, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665212/Room/sands-premier-family-suite/sands-premier-family-suite_4_qe9sxa.jpg'],
            ['room_gallary_id' => 16, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665210/Room/sands-premier-family-suite/sands-premier-family-suite_3_cvxzom.jpg'],
            ['room_gallary_id' => 17, 'room_type_id' => '2','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705665208/Room/sands-premier-family-suite/sands-premier-family-suite_1_debeqa.jpg'],
            ['room_gallary_id' => 18, 'room_type_id' => '3', 'view' => 'Garden View','room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666550/Room/sands-premier-studio/sands-premier-studio_1_hdtmob.jpg'],
            ['room_gallary_id' => 19, 'room_type_id' => '3', 'view' => 'City View','room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666529/Room/sands-premier-studio/sands-premier-studio_2_r2zph8.jpg'],
            ['room_gallary_id' => 20, 'room_type_id' => '3', 'view' => 'All','room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666547/Room/sands-premier-studio/sands-premier-studio_9_ri047b.jpg'],
            ['room_gallary_id' => 21, 'room_type_id' => '3', 'view' => 'All','room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666544/Room/sands-premier-studio/sands-premier-studio_8_j4sgzw.jpg'],
            ['room_gallary_id' => 22, 'room_type_id' => '3', 'view' => 'All','room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666542/Room/sands-premier-studio/sands-premier-studio_7_e3rode.jpg'],
            ['room_gallary_id' => 23, 'room_type_id' => '3', 'view' => 'All','room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666539/Room/sands-premier-studio/sands-premier-studio_6_g2g523.jpg'],
            ['room_gallary_id' => 24, 'room_type_id' => '3', 'view' => 'All', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666534/Room/sands-premier-studio/sands-premier-studio_4_ifcooh.jpg'],
            ['room_gallary_id' => 25, 'room_type_id' => '3','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705666530/Room/sands-premier-studio/sands-premier-studio_3_dym7dz.jpg'],
            ['room_gallary_id' => 26, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667814/Room/sands-premier-signature/sands-premier-signature_11_kycyp1.jpg'],
            ['room_gallary_id' => 27, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667825/Room/sands-premier-signature/sands-premier-signature_9_jvry6i.jpg'],
            ['room_gallary_id' => 28, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667822/Room/sands-premier-signature/sands-premier-signature_8_kwnnxv.jpg'],
            ['room_gallary_id' => 29, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667819/Room/sands-premier-signature/sands-premier-signature_12_sqjmlj.jpg'],
            ['room_gallary_id' => 30, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667817/Room/sands-premier-signature/sands-premier-signature_6_xrajng.jpg'],
            ['room_gallary_id' => 31, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667812/Room/sands-premier-signature/sands-premier-signature_10_bwkegx.jpg'],
            ['room_gallary_id' => 32, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667809/Room/sands-premier-signature/sands-premier-signature_4_ns7amf.jpg'],
            ['room_gallary_id' => 33, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667806/Room/sands-premier-signature/sands-premier-signature_1_gjr4h2.jpg'],
            ['room_gallary_id' => 34, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667804/Room/sands-premier-signature/sands-premier-signature_13_veuebz.jpg'],
            ['room_gallary_id' => 35, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667801/Room/sands-premier-signature/sands-premier-signature_7_auq9cv.jpg'],
            ['room_gallary_id' => 36, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667804/Room/sands-premier-signature/sands-premier-signature_13_veuebz.jpg'],
            ['room_gallary_id' => 37, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667796/Room/sands-premier-signature/sands-premier-signature_3_gndun7.jpg'],
            ['room_gallary_id' => 38, 'room_type_id' => '4','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705667795/Room/sands-premier-signature/sands-premier-signature_2_nh6trw.jpg'],
            ['room_gallary_id' => 39, 'room_type_id' => '5','view' => 'City View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705669101/Room/sands-premier-room/sands-premier-rooom_4_mukthe.jpg'],
            ['room_gallary_id' => 40, 'room_type_id' => '5','view' => 'City View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705670750/Room/sands-premier-room/cityview-1920x843_tunyii.jpg'],
            ['room_gallary_id' => 41, 'room_type_id' => '5','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705669103/Room/sands-premier-room/sands-premier-rooom_1_jukv2o.jpg'],
            ['room_gallary_id' => 42, 'room_type_id' => '5','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705669099/Room/sands-premier-room/sands-premier-rooom_3_rkahip.jpg'],
            ['room_gallary_id' => 43, 'room_type_id' => '6','view' => 'City View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671220/Room/deluxe%20room%20m/cityview-bedroom-1920x843_fa1x6m.jpg'],
            ['room_gallary_id' => 44, 'room_type_id' => '6','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671212/Room/deluxe%20room%20m/masthead_e6riou.jpg'],
            ['room_gallary_id' => 45, 'room_type_id' => '6','view' => 'All', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671217/Room/deluxe%20room%20m/deluxe-room-gallery-2-1920x1080_f0irek.jpg'],
            ['room_gallary_id' => 46, 'room_type_id' => '6','view' => 'All', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671214/Room/deluxe%20room%20m/deluxe-room-bathroom-1920x1080_ygwesn.jpg'],
            ['room_gallary_id' => 47, 'room_type_id' => '7','view' => 'Garden View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671561/Room/premier%20Room%20Classic/premier-room-gallery-2-1920x1080_o7fzob.jpg'],
            ['room_gallary_id' => 48, 'room_type_id' => '7','view' => 'City View', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671553/Room/premier%20Room%20Classic/masthead_dingbg.jpg'],
            ['room_gallary_id' => 49, 'room_type_id' => '7','view' => 'All', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671555/Room/premier%20Room%20Classic/premier-room-gallery-1-1920x1080_wlkdrl.jpg'],
            ['room_gallary_id' => 50, 'room_type_id' => '7','view' => 'All', 'room_picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705671557/Room/premier%20Room%20Classic/premier-room-bathroom-1920x1080_ljvfba.jpg'],
            ]);

        $restaurants = [
            [
                'restaurant_name' => 'ANGELINA',
                'time_open' => '11:00 AM',
                'time_close' => '10:00 PM',
                'restaurant_type' => 'WESTERN | CAFÉ | CASUAL | DINING',
                'contact_email' => 'Angelina@hoteldulluna.com',
                'contact_number' => '+65 6688 7218',
                'description' => 'Made from meringue, light whipped cream and chestnut paste vermicelli, the Mont-Blanc is an Angelina classic. Other pastries the tearoom is known for include the Éclair Chocolat and Paris-New York. Founded in 1903 by Austrian confectioner Antoine Rumpelmayer and named in honour of his daughter-in-law, Angelina also offers breakfast items, pastas and high tea sets.',
                'location' => 'B2-89, The Shoppes\r\nNearest carpark: Central (Orange zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314055/Dining/angelina-1920x1080-3_o5bder.jpg',
            ],
            [
                'restaurant_name' => 'BACHA COFFEE',
                'time_open' => '10:00 AM',
                'time_close' => '10:00 PM',
                'restaurant_type' => 'WESTERN | CAFÉ | CASUAL DINING',
                'contact_email' => 'bachacoffee@hoteldelluna.com',
                'contact_number' => '+65 6560 1910',
                'description' => 'Bacha Coffee presents Fashion Avenue, the world\'s first destination to offer their coffee room, takeaway experience, and boutique all in one spectacular location. Fashion Avenue houses their entire collection of over 200 coffees, from Single Origin, Fine Blended, Fine Flavoured to CO2 Decaffeinated varieties.',
                'location' => 'B2-13/14, The Shoppes\r\nNearest carpark: Central (Orange zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314060/Dining/bacha-coffee-gallery-4_w9aev8.jpg',
            ],
            [
                'restaurant_name' => 'BEANSTRO',
                'time_open' => '08:30 AM',
                'time_close' => '10:30 PM',
                'restaurant_type' => 'HALAL | WESTERN | CAFÉ',
                'contact_email' => 'beanstro@hoteldelluna.com',
                'contact_number' => '+65 6688 7001',
                'description' => 'Bask in the good vibes at Beanstro, with its chic interior designed to create a stylish getaway in the heart of Singapore. Indulge in a delicious adventure with hearty treats such as Tiger Prawns Aglio Olio, Red Snapper Fish & Chips, Classic Burger and more! You can also experience the theatricality of Balancing Siphon coffee brewing method here.',
                'location' => 'B2-20, The Shoppes\r\nNearest carpark: Central (Orange zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314066/Dining/beanstro-1920x1080-hero_r8vwpq.jpg',
            ],
            [
                'restaurant_name' => 'BLACK TAP CRAFT BURGERS & BEER',
                'time_open' => '11:30 AM',
                'time_close' => '10:30 PM',
                'restaurant_type' => 'WESTERN | CASUAL DINING | BAR',
                'contact_email' => '',
                'contact_number' => '',
                'description' => 'Feast on award-winning burgers, towering milkshakes, craft beers, and cocktails at the first Asian flagship of this New York City institution. Black Tap brings a timeless NYC vibe to Singapore, rocking an old-school hip-hop soundtrack and a bespoke mural by local artist @has.j. The menu features a wide selection of craft burgers.',
                'location' => 'L1-80, The Shoppes\r\nNearest carpark: South (Blue zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314074/Dining/black-tap-gallery-1920x1080-8_d1hecy.jpg',
            ],
            [
                'restaurant_name' => 'BLOSSOM',
                'time_open' => '11:00 AM',
                'time_close' => '09:45 PM',
                'restaurant_type' => 'CHINESE | OTHER ASIAN | VEGETARIAN | FINE DINING | BAR',
                'contact_email' => 'info@blossomrestaurant.com',
                'contact_number' => '+65 6688 7799',
                'description' => 'Contemporary Chinese restaurant BLOSSOM offers modern interpretations of cuisine which present diners with modern interpretations of the finest Cantonese and Sichuan cuisine – a delectable balance of traditional, modern flavours and techniques. Lounge in the restaurant’s elegant dining area, set with oriental motifs against a backdrop of lush greenery.',
                'location' => 'Lobby, Hotel Tower 2\r\nNearest carpark: Central (Orange zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314075/Dining/blossom-1920x1080_wlo4st.jpg',
            ],
            [
                'restaurant_name' => 'BREAD STREET KITCHEN BY GORDON RAMSAY',
                'time_open' => '11:30 AM',
                'time_close' => '10:30 PM',
                'restaurant_type' => 'VEGETARIAN | WESTERN | CASUAL DINING | WATERFRONT | CELEBRITY CHEF RESTAURANT | BAR',
                'contact_email' => '',
                'contact_number' => '',
                'description' => 'With numerous television appearances and Michelin-Starred restaurants under his belt, Chef Gordon Ramsay and his cuisines truly need no introduction. The menu is a delightful selection of traditional British European fare. Beef Wellington, Fish & Chips and Roasted Cod are some of the signatures that shouldn’t be missed.',
                'location' => 'L1-81, The Shoppes\r\nNearest carpark: South (Blue zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314083/Dining/breadstreet-kitchen-porterhouse_vnledg.jpg',
            ],
            [
                'restaurant_name' => 'CANTON PARADISE',
                'time_open' => '10:30 AM',
                'time_close' => '11:00 PM',
                'restaurant_type' => 'CHINESE | OTHER ASIAN | VEGETARIAN | CASUAL DINING',
                'contact_number' => '+65 6688 7052',
                'description' => 'At Canton Paradise, expect all-day dim sum, roast meats, Hong Kong-style congee and wok-fried Cantonese dishes. The casual restaurant is perfect for couples and families alike, and offers views of the waterfront if you score the right seats.',
                'location' => 'L1-02, The Shoppes\r\nNearest carpark: North (Green zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314089/Dining/canton-paradise-1920x1080_xrxned.jpg',
            ],
            [
                'restaurant_name' => 'CÉ LA VI RESTAURANT',
                'time_open' => '12:00 PM',
                'time_close' => '11:00 PM',
                'restaurant_type' => 'OTHER ASIAN | WESTERN | FINE DINING | ROOFTOP | BAR',
                'contact_email' => 'celavi@hoteldelluna.com',
                'contact_number' => '+65 6508 2188',
                'description' => 'Overlooking the Singapore Straits and luminescent Gardens by the Bay, CÉ LA VI Restaurant is an alluring and contemporary dining institution. Curated by a powerhouse team of culinary maestros, CÉ LA VI unites key facets of Contemporary Asian cuisine ━ celebrating seasonality and the purity of flavour found in singular ingredients.',
                'location' => 'L57, Del Luna SkyPark, Hotel Tower 3\r\nNearest carpark: Central (Orange zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314093/Dining/ce-la-vi-gallery-updated-5_reltmo.jpg',
            ],
            [
                'restaurant_name' => 'DALLAS CAFE & BAR',
                'time_open' => '11:30 AM',
                'time_close' => '12:00 AM',
                'restaurant_type' => 'WESTERN | CAFÉ | WATERFRONT | BAR',
                'contact_email' => 'dallascafe@hoteldelluna.com',
                'contact_number' => '+65 6688 7153',
                'description' => 'Savour a delightful array of artisanal pizzas and the finest cheese and antipasto platters at Dallas Cafe & Bar. Complete your dining experience with draught beers, specially crafted cocktails and a selection of wines from Australia and New Zealand.',
                'location' => 'L1-85, The Shoppes\r\nNearest carpark: Central (Orange zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314103/Dining/dallas-cafe--bar-11_h8jiuc.jpg',
            ],
            [
                'restaurant_name' => 'DIN TAI FUNG',
                'time_open' => '10:30 AM',
                'time_close' => '12:00 AM',
                'restaurant_type' => 'CHINESE | CASUAL DINING',
                'contact_email' => 'dintaifung@hoteldelluna.com',
                'contact_number' => '+65 6634 9969',
                'description' => 'Ranked as one of the world\'s Top Ten Best Restaurants by the New York Times, Din Tai Fung has its roots dating back to Taiwan more than 60 years ago. With its famous signature Steamed Pork Xiao Long Bao and Steamed Chicken Soup, this authentic Taiwanese restaurant makes waves with branches in Singapore, Thailand, UK, Australia, China, Indonesia, Japan, Malaysia, Philippines, South Korea, UAE and USA.',
                'location' => 'B1-01, The Shoppes\r\nNearest carpark: South (Blue zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314107/Dining/din-tai-fung-desktop-masthead_ximyoq.jpg',
            ],
            [
                'restaurant_name' => 'FATT CHOI HOTPOT',
                'time_open' => '11:00 AM',
                'time_close' => '06:00 PM',
                'restaurant_type' => 'CHINESE | LOCAL | VEGETARIAN | CASUAL DINING | CASINO RESTAURANT',
                'contact_email' => 'fattchoihotpot@hoteldelluna.com',
                'contact_number' => '+65 6688 1567',
                'description' => 'Gather for a warm and nourishing meal at Fatt Choi Hotpot, where the quintessential hotpot dining experience is redefined. Customise the perfect hotpot for one or to share with an abundance of ingredients to choose from, including delectable seafood and the finest cuts of meat and vegetables.',
                'location' => 'B2M, Main Casino Floor\r\nNearest carpark: Central (Orange zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314111/Dining/fatt-choi-interior-2-1920x843_yiew5w.jpg',
            ],
            [
                'restaurant_name' => 'HAI DI LAO HOT POT',
                'time_open' => '10:30 AM',
                'time_close' => '06:00 PM',
                'restaurant_type' => 'CHINESE | CASUAL DINING',
                'contact_email' => 'haidilao@hoteldelluna.com',
                'contact_number' => '+65 6509 1611',
                'description' => 'The brand Haidilao was founded in 1994. With over 20 years of development, Haidilao International Holding Ltd. has become a world-renowned catering enterprise. Over the years, Haidilao has withstood the challenges of the market as well as customers, and has successfully forged a quality hot pot brand which has earned a reputation for itself. Haidilao combines kinds of characteristics of hot pot in many places of China. As a large-scale chain catering enterprise with operations all over the world, Haidilao adheres to integrity in business. It gives the highest priority to continuously improving the quality and safety of its food products, providing more thoughtful services to its customers while delivering healthier, safer and more nutritious food.',
                'location' => 'B2-01A, The Shoppes\r\nNearest carpark: South (Blue zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314111/Dining/hai-di-lao-1920x1080_eaass2.jpg',
            ],
            [
                'restaurant_name' => 'IPPUDO',
                'time_open' => '11:00 AM',
                'time_close' => '10:00 PM',
                'restaurant_type' => 'JAPANESE | CASUAL DINING',
                'contact_email' => 'ippudo@hoteldelluna.com',
                'contact_number' => '+65 6688 7064',
                'description' => 'Get your ramen fix at the award-winning IPPUDO, where classics and favourites such as Shoyu Ramen, Niku Soba and Tsukemen are served. Also try the restaurant’s unique side dishes such as samurai ribs and almond jelly noodles. If you would rather a takeaway, Kuro-Obi is located next door and offers chicken-based ramen in a thick and creamy broth.',
                'location' => 'B2-54, The Shoppes\r\nNearest carpark: North (Green zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314115/Dining/ippudo-1920x843-1_ekx9ei.jpg',
            ],
            [
                'restaurant_name' => 'JUMBO SIGNATURES',
                'time_open' => '11:30 AM',
                'time_close' => '03:00 AM',
                'restaurant_type' => 'LOCAL | CHINESE | OTHER ASIAN | VEGETARIAN | FINE DINING',
                'contact_email' => 'jumbosignatures@hoteldelluna.com',
                'contact_number' => '+65 6688 7023',
                'description' => 'JUMBO Signatures, the flagship premium dining concept of JUMBO Group, is taking your dining experience to greater heights. Set in a distinctive restaurant redolent of Singapore\'s heritage as a British colony, the familiar black-and-white features and intricate geometric patterns offer an alluring opportunity to immerse yourself in Singapore\'s tradition, culture and history through food fit for royalty. The flagship restaurant features Singapore\'s iconic flavours from the multiple dining concepts of JUMBO Group. From the ubiquitous Bak Kut Teh stewed to perfection by NG AH SIO Bak Kut Teh to the tantalizing Award Winning Chilli Crab mastered by JUMBO Seafood, JUMBO Signatures combines these quintessential tastes and elevates the Singapore dining experience through tasting menus and sommelier wine pairing.',
                'location' => 'B1-01B, The Shoppes\r\nNearest carpark: South (Blue zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314120/Dining/jumbo-gallery-1_b9bgud.jpg',
            ],
            [
                'restaurant_name' => 'ORIGIN + BLOOM',
                'time_open' => '07:00 AM',
                'time_close' => '08:30 PM',
                'restaurant_type' => 'WESTERN | CAFÉ',
                'contact_email' => '',
                'contact_number' => '+65 6688 8588',
                'description' => 'Flavours and ideas blossom into meaningful possibilities, right in the heart of a beautiful garden oasis. Here at Origin + Bloom, we draw inspiration from the finest artisans and craftsmen of Europe. Every ingredient we use is carefully considered – where it came from, how it is prepared and how the elements perfectly come together. Enjoy a menu of modern delights and timeless classics from our selection of freshly made gourmet breads, sandwiches and salads, paired with one of our signature brews such as contemporary cold-drip coffee. Then, take your pick from a delicious range of Instagram-worthy desserts such as the signature Mango, Piedmont Hazelnut Praline Macaé Chocolate Bar, Opera Cake and Salted Chocolate Orange Cake.',
                'location' => 'Lobby, Hotel Tower 2 & 3',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314124/Dining/origin-and-bloom-gallery-1_torpoc.jpg',
            ],
            [
                'restaurant_name' => 'PS.CAFE',
                'time_open' => '10:30 AM',
                'time_close' => '10:30 PM',
                'restaurant_type' => 'WESTERN | CAFÉ | LOCAL | CASUAL DINING',
                'contact_email' => 'pscafe@hoteldelluna.com',
                'contact_number' => '+65 6708 9288',
                'description' => 'Hailed for its delicious comfort food and beautiful urban escapes PS.Cafe at Marina Bay Sands features a brand new menu comprising an array of delicious PS.Cafe classics, as well as new dishes exclusive to the venue. Parisian café culture was the inspiration behind the design story of PS.Cafe at Marina Bay Sands, which features the brand’s signature black and white aesthetic alongside thoughtful detailing to create a stunning yet intimate dining setting. Sheltered by parasols, guests visiting the island platform will find a private space that’s flooded with light, making it the perfect sanctuary to enjoy some delicious refreshments whilst watching the world go by.',
                'location' => 'Canal Level, B2-119\r\nNearest carpark: South (Blue zone)',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314131/Dining/pscafe-desktop-masthead_zk8nny.jpg',
            ],
            [
                'restaurant_name' => 'RASAPURA MASTERS',
                'time_open' => '10:00 AM',
                'time_close' => '11:00 PM',
                'restaurant_type' => 'LOCAL | OTHER ASIAN | CASUAL DINING',
                'contact_email' => 'rasapuramasters@hoteldelluna.com',
                'contact_number' => '',
                'description' => 'Experience the food paradise that is Singapore as you sample a host of local and regional delights at Rasapura Masters, a space that evokes the city’s colonial past. Start your day at the food hall with a quintessentially Singaporean breakfast of toast, half-boiled eggs, and your choice of coffee — or kopi as the locals call it. For brunch, try dim sum, chicken rice or Butterfly Pea Flower Nasi Lemak. You can also choose Chinese, Japanese or Korean cuisine. Bubble tea and juicy chicken wings are perfect for a snack, or go for refreshing local desserts such as chendol and cheng tng. Come dinner, feast on local seafood dishes such as chilli crab, pepper crab and cereal prawn.',
                'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314135/Dining/rasapura-featured-1_rguq3l.jpg',
            ],
        ];

        foreach ($restaurants as $restaurantData) {
            Restaurant::create($restaurantData);
        }

        DB::table('restaurant_gallaries')->insert([
                ['restaurant_gallaries_id' => 1, 'restaurant_id' => 1, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314055/Dining/angelina-1920x1080-1_tjjwd0.jpg'],
                ['restaurant_gallaries_id' => 2, 'restaurant_id' => 1, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314055/Dining/angelina-1920x1080-2_j4tr2z.jpg'],
                ['restaurant_gallaries_id' => 4, 'restaurant_id' => 1, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314056/Dining/angelina-gallery-1920x1080-1_nqcrqy.jpg'],
                ['restaurant_gallaries_id' => 5, 'restaurant_id' => 1, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314056/Dining/angelina-gallery-1920x1080-3_axg4so.jpg'],
                ['restaurant_gallaries_id' => 6, 'restaurant_id' => 1, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314056/Dining/angelina-gallery-1920x1080-4_q1sfpb.jpg'],
                ['restaurant_gallaries_id' => 7, 'restaurant_id' => 1, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314057/Dining/Angelina-Masthead-1920x1080_wpomby.jpg'],
                ['restaurant_gallaries_id' => 8, 'restaurant_id' => 1, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314058/Dining/angelina-set-lunch-752x1336_kvmfs7.jpg'],
                ['restaurant_gallaries_id' => 10, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314058/Dining/bacha-coffee-desktop-masthead_tforfg.jpg'],
                ['restaurant_gallaries_id' => 11, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314059/Dining/bacha-coffee-gallery-1_avsuek.jpg'],
                ['restaurant_gallaries_id' => 12, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314059/Dining/bacha-coffee-gallery-2_pgqkdu.jpg'],
                ['restaurant_gallaries_id' => 13, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314060/Dining/bacha-coffee-gallery-3_fbl3tt.jpg'],
                ['restaurant_gallaries_id' => 15, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314061/Dining/bacha-coffee-gallery-5_qnztra.jpg'],
                ['restaurant_gallaries_id' => 16, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314062/Dining/bacha-coffee-gallery-6_ooyczf.jpg'],
                ['restaurant_gallaries_id' => 17, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314062/Dining/bacha-coffee-gallery-7_aafcmy.jpg'],
                ['restaurant_gallaries_id' => 18, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314062/Dining/bacha-coffee-gallery-8_sos666.jpg'],
                ['restaurant_gallaries_id' => 19, 'restaurant_id' => 2, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314063/Dining/bacha-festive-offerings-1080x1920_j4vgen.jpg'],
                ['restaurant_gallaries_id' => 20, 'restaurant_id' => 3, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314064/Dining/beanstro-1920x1080-1_a1gdj4.jpg'],
                ['restaurant_gallaries_id' => 21, 'restaurant_id' => 3, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314065/Dining/beanstro-1920x1080-2_a4ahmo.jpg'],
                ['restaurant_gallaries_id' => 24, 'restaurant_id' => 3, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314066/Dining/beanstro-gallery-1920x1080-2_xu70wv.jpg'],
                ['restaurant_gallaries_id' => 25, 'restaurant_id' => 3, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314066/Dining/beanstro-gallery-1920x1080-3_rfehvj.jpg'],
                ['restaurant_gallaries_id' => 26, 'restaurant_id' => 3, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314068/Dining/beanstro-gallery-1920x1080-4_dqiqxr.jpg'],
                ['restaurant_gallaries_id' => 27, 'restaurant_id' => 3, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314069/Dining/beanstro-gallery-1920x1080-7_dx5qxg.jpg'],
                ['restaurant_gallaries_id' => 28, 'restaurant_id' => 3, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314069/Dining/beanstro-gallery-1920x1080-8_svqk46.jpg'],
                ['restaurant_gallaries_id' => 29, 'restaurant_id' => 4, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314070/Dining/black-tap-crazyshake-752x1336_xhz9th.jpg'],
                ['restaurant_gallaries_id' => 30, 'restaurant_id' => 4, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314071/Dining/black-tap-gallery-1920x1080-1_lm3cec.jpg'],
                ['restaurant_gallaries_id' => 31, 'restaurant_id' => 4, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314071/Dining/black-tap-gallery-1920x1080-2_dhi80s.jpg'],
                ['restaurant_gallaries_id' => 32, 'restaurant_id' => 4, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314072/Dining/black-tap-gallery-1920x1080-3_sdb3d4.jpg'],
                ['restaurant_gallaries_id' => 33, 'restaurant_id' => 4, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314073/Dining/black-tap-gallery-1920x1080-5_vhpm1n.jpg'],
                ['restaurant_gallaries_id' => 34, 'restaurant_id' => 4, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314074/Dining/black-tap-gallery-1920x1080-7_kzan9o.jpg'],
                ['restaurant_gallaries_id' => 37, 'restaurant_id' => 5, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314076/Dining/blossom-1920x1080-1_hafnof.jpg'],
                ['restaurant_gallaries_id' => 38, 'restaurant_id' => 5, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314076/Dining/blossom-1920x1080-2_lhvlmu.jpg'],
                ['restaurant_gallaries_id' => 39, 'restaurant_id' => 5, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314077/Dining/blossom-gallery-1_ymb2nv.jpg'],
                ['restaurant_gallaries_id' => 40, 'restaurant_id' => 5, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314078/Dining/blossom-gallery-6_y4kffe.jpg'],
                ['restaurant_gallaries_id' => 41, 'restaurant_id' => 5, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314079/Dining/blossom-gallery-8_zn7bh7.jpg'],
                ['restaurant_gallaries_id' => 42, 'restaurant_id' => 5, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314079/Dining/blossom-gallery-14_wupko2.jpg'],
                ['restaurant_gallaries_id' => 43, 'restaurant_id' => 5, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314080/Dining/blossom-gallery-18_zvwlxa.jpg'],
                ['restaurant_gallaries_id' => 44, 'restaurant_id' => 6, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314082/Dining/breadstreet-kitchen-fish-and-chips_tbsm1g.jpg'],
                ['restaurant_gallaries_id' => 45, 'restaurant_id' => 6, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314082/Dining/breadstreet-kitchen-gallery-2_ilz06n.jpg'],
                ['restaurant_gallaries_id' => 46, 'restaurant_id' => 6, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314083/Dining/breadstreet-kitchen-gallery-3_yjeqjq.jpg'],
                ['restaurant_gallaries_id' => 48, 'restaurant_id' => 6, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314084/Dining/bsk-1920x1080_ccroom.jpg'],
                ['restaurant_gallaries_id' => 49, 'restaurant_id' => 6, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314085/Dining/bsk-1920x1080-3_t2trgt.jpg'],
                ['restaurant_gallaries_id' => 50, 'restaurant_id' => 6, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314086/Dining/bsk-gallery-1920x1080-2_wz9gve.jpg'],
                ['restaurant_gallaries_id' => 51, 'restaurant_id' => 6, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314086/Dining/bsk-gallery-1920x1080-7_md5nqr.jpg'],
                ['restaurant_gallaries_id' => 52, 'restaurant_id' => 7, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314090/Dining/canton-paradise-1920x1080-2_kaxq4v.jpg'],
                ['restaurant_gallaries_id' => 55, 'restaurant_id' => 7, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314087/Dining/canton-paradise-2_dwfjuq.jpg'],
                ['restaurant_gallaries_id' => 56, 'restaurant_id' => 7, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314089/Dining/canton-paradise-4_oy1bvg.jpg'],
                ['restaurant_gallaries_id' => 57, 'restaurant_id' => 8, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314091/Dining/ce-la-vi-gallery-updated-3_gtoona.jpg'],
                ['restaurant_gallaries_id' => 58, 'restaurant_id' => 8, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314092/Dining/ce-la-vi-gallery-updated-4_gvnkbj.jpg'],
                ['restaurant_gallaries_id' => 60, 'restaurant_id' => 8, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314094/Dining/ce-la-vi-gallery-updated-6_pvxmmk.jpg'],
                ['restaurant_gallaries_id' => 61, 'restaurant_id' => 8, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314094/Dining/clv-1920x1080_ejs4py.jpg'],
                ['restaurant_gallaries_id' => 62, 'restaurant_id' => 8, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314095/Dining/clv-1920x1080-1_fyjqsg.jpg'],
                ['restaurant_gallaries_id' => 64, 'restaurant_id' => 8, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314097/Dining/clv-1920x1080-2_xcsvpk.jpg'],
                ['restaurant_gallaries_id' => 65, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314098/Dining/dallas-1920x1080_yr3ufh.jpg'],
                ['restaurant_gallaries_id' => 66, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314099/Dining/dallas-1920x1080-3_hytrkb.jpg'],
                ['restaurant_gallaries_id' => 67, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314098/Dining/dallas-1920x1080-1_uqe8lg.jpg'],
                ['restaurant_gallaries_id' => 68, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314099/Dining/dallas-1920x1080-2_crcpm1.jpg'],
                ['restaurant_gallaries_id' => 69, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314103/Dining/dallas-cafe--bar-10_n0v0am.jpg'],
                ['restaurant_gallaries_id' => 70, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314102/Dining/dallas-cafe--bar-2_vqm9co.jpg'],
                ['restaurant_gallaries_id' => 71, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314103/Dining/dallas-cafe--bar-11_h8jiuc.jpg'],
                ['restaurant_gallaries_id' => 72, 'restaurant_id' => 9, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314103/Dining/dallas-cafe--bar-6_oiy6qs.jpg'],
                ['restaurant_gallaries_id' => 74, 'restaurant_id' => 10, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314054/Dining/1920x843-fried-rice_hwqv0g.jpg'],
                ['restaurant_gallaries_id' => 75, 'restaurant_id' => 10, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314054/Dining/1920x843px_Image_Gallery_Sliced_Duck_in_Crispy_Spring_Onion_Pastry_k2d19h.jpg'],
                ['restaurant_gallaries_id' => 77, 'restaurant_id' => 10, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314106/Dining/din-tai-fung-1920x1080-1_iobuxg.jpg'],
                ['restaurant_gallaries_id' => 79, 'restaurant_id' => 10, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314107/Dining/din-tai-fung-1920x1080-4_iswvtl.jpg'],
                ['restaurant_gallaries_id' => 81, 'restaurant_id' => 10, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314107/Dining/din-tai-fung-gallery-1_rk1mrs.jpg'],
                ['restaurant_gallaries_id' => 82, 'restaurant_id' => 11, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314053/Dining/1-fc-1920x843_xbc9hz.jpg'],
                ['restaurant_gallaries_id' => 83, 'restaurant_id' => 11, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314054/Dining/2-fc_1920x843_omy08w.jpg'],
                ['restaurant_gallaries_id' => 84, 'restaurant_id' => 11, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314110/Dining/fatt-choi-1920x1080-1_zeyf6n.jpg'],
                ['restaurant_gallaries_id' => 85, 'restaurant_id' => 11, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314111/Dining/fatt-choi-video_aefi2r.jpg'],
                ['restaurant_gallaries_id' => 89, 'restaurant_id' => 12, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314114/Dining/hai-di-lao-1920x1080-2_kspb56.jpg'],
                ['restaurant_gallaries_id' => 90, 'restaurant_id' => 12, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314115/Dining/hai-di-lao-1920x1080-3_elwekw.jpg'],
                ['restaurant_gallaries_id' => 91, 'restaurant_id' => 12, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314115/Dining/hdl-gallery-1_jycjvn.jpg'],
                ['restaurant_gallaries_id' => 92, 'restaurant_id' => 12, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314115/Dining/hdl-gallery-3_ksdeto.jpg'],
                ['restaurant_gallaries_id' => 94, 'restaurant_id' => 13, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314116/Dining/ippudo-1920x843-2_mi6x1v.jpg'],
                ['restaurant_gallaries_id' => 95, 'restaurant_id' => 13, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314119/Dining/ippudo-1920x843-3_jvsvdm.jpg'],
                ['restaurant_gallaries_id' => 96, 'restaurant_id' => 13, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314119/Dining/ippudo-desktop-masthead_rfqby8.jpg'],
                ['restaurant_gallaries_id' => 97, 'restaurant_id' => 13, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314120/Dining/ippudo-gallery-10_kbzxyz.jpg'],
                ['restaurant_gallaries_id' => 99, 'restaurant_id' => 14, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314120/Dining/jumbo-gallery-2_mw6wbf.jpg'],
                ['restaurant_gallaries_id' => 100, 'restaurant_id' => 14, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314123/Dining/jumbo-gallery-5_ir05vd.jpg'],
                ['restaurant_gallaries_id' => 101, 'restaurant_id' => 14, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314123/Dining/jumbo-gallery-6_tfsy7w.jpg'],
                ['restaurant_gallaries_id' => 102, 'restaurant_id' => 14, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314123/Dining/jumbo-gallery-10_qepown.jpg'],
                ['restaurant_gallaries_id' => 105, 'restaurant_id' => 15, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314124/Dining/ob-signature_uairks.jpg'],
                ['restaurant_gallaries_id' => 107, 'restaurant_id' => 15, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314124/Dining/origin-and-bloom-gallery-1_torpoc.jpg'],
                ['restaurant_gallaries_id' => 108, 'restaurant_id' => 15, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314127/Dining/origin-and-bloom-gallery-7_rpd30w.jpg'],
                ['restaurant_gallaries_id' => 109, 'restaurant_id' => 15, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314128/Dining/origin-and-bloom-gallery-9_pxnbno.jpg'],
                ['restaurant_gallaries_id' => 110, 'restaurant_id' => 15, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314127/Dining/origin-and-bloom-gallery-5_rnnttl.jpg'],
                ['restaurant_gallaries_id' => 111, 'restaurant_id' => 15, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314127/Dining/origin-and-bloom-gallery-3_vgs1gv.jpg'],
                ['restaurant_gallaries_id' => 113, 'restaurant_id' => 16, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314131/Dining/ps-cafe-gallery-1_x4bx5l.jpg'],
                ['restaurant_gallaries_id' => 114, 'restaurant_id' => 16, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314131/Dining/ps-cafe-gallery-2_qaje4z.jpg'],
                ['restaurant_gallaries_id' => 115, 'restaurant_id' => 16, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314132/Dining/ps-cafe-gallery-5_njolxf.jpg'],
                ['restaurant_gallaries_id' => 116, 'restaurant_id' => 16, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314132/Dining/ps-cafe-gallery-3_zmhjaa.jpg'],
                ['restaurant_gallaries_id' => 117, 'restaurant_id' => 16, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314132/Dining/ps-cafe-gallery-4_bo3xeh.jpg'],
                ['restaurant_gallaries_id' => 119, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314136/Dining/rasapura-featured-3_emxmy9.jpg'],
                ['restaurant_gallaries_id' => 120, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314135/Dining/rasapura-featured-1_rguq3l.jpg'],
                ['restaurant_gallaries_id' => 121, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314136/Dining/rasapura-featured-2_hounuq.jpg'],
                ['restaurant_gallaries_id' => 122, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314141/Dining/rasapura-gallery-10_ymt9jx.jpg'],
                ['restaurant_gallaries_id' => 123, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314139/Dining/rasapura-gallery-7_ivvbju.jpg'],
                ['restaurant_gallaries_id' => 124, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314136/Dining/rasapura-gallery-1_ckbuyn.jpg'],
                ['restaurant_gallaries_id' => 125, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314137/Dining/rasapura-gallery-3_ee0q0w.jpg'],
                ['restaurant_gallaries_id' => 126, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314140/Dining/rasapura-gallery-9_hfbj0l.jpg'],
                ['restaurant_gallaries_id' => 127, 'restaurant_id' => 17, 'picture' => 'https://res.cloudinary.com/dk0ystu6k/image/upload/v1705314138/Dining/rasapura-gallery-6_ww0fso.jpg']
        ]);

        $room = Room::factory(150)->create();


    }
}
