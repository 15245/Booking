<?php require 'header.tpl.php' ?>

<body>

    <header class="nk-header nk-header-opaque">

        <!--START: Navbar-->
        <?php include("navbar.tpl.php");?>
        <!-- END: Navbar -->

    </header>

    <div class="nk-main">

        <form method="post" action="confirmation.php">

        <div class="container">
            <div class="nk-portfolio-single">
                <div class="nk-gap-4 mb-14"></div>
                <h1 class="nk-portfolio-title display-4">Bookings' validation</h1>
                <?php if ($booking->isOneAdult() === false): ?>
                  <h2 class="alert alert-danger">
                     It’s necessary at least one major passenger to continue booking
                     <button class="btn" type="button" onclick="location.href='detail.php'">Edit passengers</button>
                  </h2>
                <?php endif; ?>
                <div class="row vertical-gap">
                    <div class="col-lg-8">
                        <div class="nk-portfolio-info">
                            <div class="nk-portfolio-text">
                              <?php switch($destination):
                               case 'athens' : ?>
                              <h3>Athens</h3>
                              <p>
                              Athens is an essential tourist destination - it’s rich in major historical monuments, literature and culinary tradition.
                              An unexpected bonus for users of the Athens metro are the antiquities that turned up when the metro was being excavated, which are now on display completely free of charge within metro stations in central Athens. The largest collection is at Syntagma station, but you can also see artefacts at the Panepistimio station as well as part of an ancient Athens drainage system and kilns at Evangelismos.
                              From ancient monuments and world class museums to trendy boutiques and vibrant nightclubs, it’s hard to get bored in Athens. Don’t miss the Acropolis, the Parthenon, the Ancient Agora, the Temple of Zeus… but be sure to visit the Plaka neighbourhood as well - it’s the best place for a taste of authentic Greek culture.
                              If you would like to combine your city break with a beach break, then head to Glyfada beach, located 16 kilometres south of Athens, or to Varkiza. Both locations are easily accessible by bus and tram. You will definitely enjoy a refreshing swim and a relaxing time in the sun, and discover a range of trendy cafes, cosy restaurants and lively bars.
                              </p>
                              <?php break; ?>
                              <?php case 'ibiza' : ?>
                              <h3>Ibiza</h3>
                              <p>
                              There’s no place to party like Ibiza… but the Balearic island has much more to offer. One of the hidden gems is Dalt Villa, the old town of Ibiza. Step back into the Renaissance through 5 entrance gates, and you can enjoy a beautiful view over the island.
                              If you’re a nature lover, take a ride to Cala d’Hort in the south of Ibiza, where you’ll have a wonderful view of Es Vedra, an overwhelming mountain on an island right off the coast. And pay a visit to El Cova de Can Marca in Port de San Miguel at the north of Ibiza where you’ll find an impressive cave filled with stone waterfalls and fossils. In the north you can also find the protected sandy cove of Cala Salada.
                              And if we can give one tip to everyone who’ll fly to Ibiza this summer: plan a visit to the nearby island of Formentera. The natural wonders that you’ll encounter there are non-existent in the rest of Europe.
                              It’s time to already start dreaming of pearly white beaches, crystal clear water and romantic lighthouses!
                              </p>
                              <?php break; ?>
                              <?php case 'new york' : ?>
                              <h3>New York</h3>
                              <p>
                              New York is an attractive and surprising city, a cultural melting pot with hundreds of theatres, a large number of diners and Wall Street, the financial centre of the USA.
                              The most important sights of New York include the Empire State Building, which is one of many skyscrapers that dominate the city’s skyline. The crown of the Statue of Liberty also affords a magnificent view of the city.
                              A trip across Brooklyn Bridge is certainly an attraction. This bridge was the first steel suspension bridge ever to be built. At the time of its opening in 1883, it was also the longest bridge in the world, with a length of 470 metres. You can relax in Central Park, which is the most famous park in New York City and the entire world. It covers an area of 430 hectares in the middle of Manhattan.
                              </p>
                              <?php break; ?>
                              <?php case 'rome' : ?>
                              <h3>Rome</h3>
                              <p>
                              Thanks to its excellent climate and large number of monuments, impressive buildings and attractive squares, Rome is very popular among tourists.
                              Visitors to Rome can wander through a city full of historic buildings. Let’s start with National Monument to Victor Emmanuel II (Il Vittoriano), a huge white building constructed to commemorate the unification of Italy. Also worth a visit are The Forum Romano and the Colosseum. This arena is undoubtedly one of the most famous buildings in Rome.  
                              The Trevi Fountain is also a major tourist attraction. The name of the fountain is derived from the three streets that lead into the small square with the fountain. There is also the Pantheon, which is the oldest best-preserved building in Rome, with a dome that is open at the top. Anyone who goes to Rome should certainly visit Vatican City and the St. Peter’s Basilica, which is the biggest church in the world. This miniature state is officially not part of the city of Rome, even though it is usually associated with it. 
                              Located at the heart of Vatican City you will find the Vatican Museums, hosting one of the most magnificent art collections in the world. Officially opened in 1506 by Pope Julius II, the museums display works from the immense collection built up by the Popes throughout the centuries. Art, history, archeology… the Vatican Museums presents outstanding and unique works culminating in the Sistine Chapel decorated by the greatest masters of the Renaissance, among them Michelangelo, the papal apartments decorated by Raphael and the impressive spiral staircase designed by Donato Bramante.
                              After a busy day filling your eyes with the artistic beauties of the city, don’t forget to fill your stomach with typical Italian culinary delights. Start with an aperitivo, continue with a typical 3 course dinner and end with the best ice cream in the world. You will feel full but definitely satisfied!
                              </p>
                              <?php break; ?>
                              <?php case 'lisbon' : ?>
                              <h3>Lisbon</h3>
                              <p>
                              Lisbon is a living city with a rich history and a large number of monuments, churches and castles, which define the appearance of the city.
                              Lisbon is not just the capital of Portugal, but also its cultural and historical centre, with a large number of sights to visit. Let’s start with the Torre de Bélem. This tower is built in Renaissance style and is surrounded by water on three sides. From the 16th to the 19th century, the tower and the attached monastery were used as a prison.
                              Another attraction is the Praça do Comércio, a magnificent square with a 19th century triumphal arch, that is surrounded by Neoclassical government buildings. Art lovers must visit the Gulbenkian, a museum with paintings by Manet, Degas, Renoir and other painters. In addition to paintings, you can also admire jewels, tapestries and furniture.
                              </p>
                              <?php break; ?>
                              <?php case 'barcelona' : ?>
                              <h3>Barcelona</h3>
                              <p>
                              Wander through the Ramblas, visit the Sagrada Familia or enjoy the Spanish nightlife: Barcelona is the place to be for any tourist. 
                              Barcelona is the perfect destination for art-lovers. After all, it is the city of Miró, Picasso and, above all, Gaudí. He changed the face of Barcelona more than anyone ever did, by building the Sagrada Familia, a magnificent church that is beyond description. In 1883, Gaudí started to build this architectural masterpiece, but it has not yet been completed due to lack of funds. Entrance fees to the church are being used to finance further construction.
                              Other sights in Barcelona include Park Guëll, which was designed by Gaudí and offers a marvellous view over the city; the Camp Nou Stadium, the most important football stadium and home of FC Barcelona; and Montjuïc, a hill with a large number of museums and the Olympic stadium. You can really soak up the Catalan atmosphere in the Ramblas, the beating heart of Barcelona. 
                              After a long day of sightseeing in Barcelona you can definitely go and refresh at the Barceloneta, one of Barcelona's best-loved beaches. If you have been dreaming of a long break on a beach then you can choose to head north to the Costa Brava or south to the Costa Dorada. The best beaches of Catalonia are awaiting you and we promise you won’t be disappointed.
                              </p>
                              <?php break; ?>
                              <?php case 'london' : ?>
                              <h3>London</h3>
                              <p>
                              London is difficult to describe. You should therefore take the time to visit and sample the atmosphere of this trendy capital.
                              In addition to the many pubs and football stadiums, London also has a large number of cultural attractions and sights. Let’s start with the Big Ben, a tower with a magnificent clock that is one of the characteristic sights of London. The London skyline also offers views of the Tower Bridge, the Millennium Dome and the London Eye, world's biggest observation wheel at 135 m high.
                              Other tourist attractions include Westminster Abbey, Piccadilly Circus, the London Dungeon and Buckingham Palace. You can wander among restaurants, market stalls and little shops in Covent Garden, which is one of London’s most attractive squares. If you want to buy souvenirs, we recommend a visit to Harrods. Don’t forget to go and see one of the great musicals showing in London’s West End and have a look at Trafalgar Square, one of the city’s most vibrant open spaces, used for a range of activities, as special events, celebrations, filming, photography, rallies and demonstrations.
                              </p>
                              <?php break; ?>
                              <?php case 'venice' : ?>
                              <h3>Venice</h3>
                              <p>
                              The large number of canals, narrow passageways, magnificent bridges and impressive buildings make a visit to Venice an unforgettable experience.
                              Venice was built on 118 small islands and has about 150 canals and 410 bridges. Nothing is more romantic than a gondola trip along the narrow canals through the city centre. You can enjoy the sun and beautiful buildings while being serenaded by the gondolier. Another attraction is a trip by vaporetto (small water bus) along the Grand Canal. During the trip, you can admire the beautiful mansions built during the period from the 12th to the 18th century. 
                              Venice is, of course, also famous for St. Mark’s square and its pigeons. This square also contains the elegant San Marco Tower, which is a clock tower that affords a magnificent view of the city. You must also, of course, visit St. Mark’s Cathedral, which is one of the most magnificent cathedrals in Europe. The design of this basilica was based on Basilica of the Apostles in Constantinople and its exterior is covered by magnificent mosaics.
                              Looking for something different than its traditional carnival and gondolas? Enjoy a relaxing and romantic holiday beside the azure waters of the Gulf of Venice.
                              </p>
                              <?php break; ?>
                              <?php case 'toronto' : ?>
                              <h3>Toronto</h3>
                              <p>
                              The capital of Ontario, Toronto is the fifth biggest city in North America, and the largest as well as liveliest city in Canada. Home to a successful mix of tourist attractions, outstanding museums and theatres, and an amazing musical scene, as well as offering a host of possibilities for outdoor activities, Toronto is a cosmopolitan and ever-evolving city that will certainly lift your mood.
                              Toronto’s most famous landmark, the CN Tower, is not only an architectural wonder that’s 533 metres tall, it’s also an award-winning dining and entertainment attraction. For the ultimate experience, you can take part in the Edge Walk, a hands-free walk on a 1.5-metre wide ledge at an elevation of 356 metres. However, if you prefer to enjoy the view without the thrills, then head to the 360 Restaurant or the Horizon Restaurant.
                              Art lovers will enjoy a visit to the Royal Ontario Museum and the Art Gallery of Ontario, while sports enthusiasts must visit the Rogers Centre, a multi-purpose domed sports arena, and the Hockey Hall of Fame, where you will be able to touch and even kiss the prestigious Stanley Cup. Be sure to visit the Casa Loma, an eclectic building reminiscent of a medieval castle, constructed for a Canadian multi-millionaire, with about 100 rooms, 36 bathrooms and several secret passages.
                              If you feel an irresistible urge to shop, then head to the St. Lawrence Market, one of the world’s most famous food markets where local farmers have been selling their products for 200 years. Alternatively, visit the Eaton Center, a huge, ultra-modern shopping centre, which has been constantly expanding since it was built in 1869. In addition to the city centre, be sure to visit Toronto’s Broadway, also known as the Entertainment District. It is particularly lively in the evenings and you can enjoy major theatre productions as well as amazing musical venues. Plan a visit to the Distillery District, a historic neighbourhood that has been given a second life thanks to hot designer boutiques, cafes, art galleries and performance venues. It’s definitely the place to be in Toronto.
                              Toronto also offers tons of fun activities for children of all ages. From a stroll through High Park, a 165-acre public space, to a visit to the Toronto Zoo with over 5,000 animals, from the Ripley’s Aquarium of Canada to the Ontario Science Centre, your kids will love their trip to Toronto. And if all that is still not enough, there’s Centreville Amusement Park on Centre Island as well as Canada’s Wonderland, the largest amusement park in Canada, just outside the city.
                                <p>Nullam lobortis neque turpis, nec tempus sem pharetra at. Donec et quam, ullamcorper velit. Aliquam maximus ullamcorper ligula, at placerat dui hendrerit sed. Sed metus urna, bibendum id tortor, feugiat ipsum. Aliquam vehicula neque sit amet dolor malesuada pretium.</p>
                                <p>Curabitur tristique, felis ut mattis auctor, elit ante laoreet libero, ac lorem quam vitae libero. Suspen disse aliquet eget risus quis vehicula.</p>

                                <?php break; ?>
                                <?php endswitch; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <table class="nk-portfolio-details">
                            <tr class="alert alert-primary">
                                <td>
                                    <strong>Destination:</strong><?php echo $bookingConf->getDestination(); ?>
                                </td>

                            </tr>
                            <tr class="alert alert-secondary">
                                <td>
                                    <strong>Passengers:</strong><?php echo $booking->getTravellersNumber(); ?>
                                </td>

                            </tr>
                            <?php foreach($booking->getTravellers() as $traveller) { ?>
                            <tr><td><hr></td></tr>
                            <tr>
                                <td>
                                    <strong>First name:</strong><?php echo $traveller->getFirstname() ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <strong>Last name:</strong><?php echo $traveller->getLastname(); ?>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <strong>Age:</strong><?php echo $traveller->getAge(); ?>
                                </td>

                            </tr>
                            <?php } // end foreach travellers ?>
                            <tr class="alert alert-info">
                                <td>
                                    <strong>Cancellation insurance:</strong>
                                </td>

                                <td><?php echo $bookingConf->getInsurance() ? 'YES' : 'NO'; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="nk-gap-4 mt-14"></div>
            </div>
        </div>

        <img class="nk-img-fit" src="<?php echo WEB_IMAGES . '/' . $bookingConf->getDestination() ;?>.jpg" style="width:100%">

        <!-- START: Pagination -->
        <div class="nk-pagination nk-pagination-center">
            <div class="container">
                <button class="btn" type="button" onclick="location.href='detail.php'">Previous page</button>
                <button class="btn" type="button" onclick="location.href='cancel.php'">Cancelling the reservation</button>
                <?php if ($booking->isOneAdult() === true): ?>
                  <button type="submit" class="btn">Confirm</span></button>
                <?php endif; ?>
            </div>
        </div>
        <!-- END: Pagination -->

        </form>

        <!--START: Footer-->
        <?php include("footer.tpl.php");?>
        <!-- END: Footer -->


    </div>


</body>

</html>
