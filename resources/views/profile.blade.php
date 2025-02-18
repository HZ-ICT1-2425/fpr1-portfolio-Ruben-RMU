@extends('components.main')

@section('content')
    <div id="prep">
        <div id="personal">
            <h3>Personal information:</h3>
            <ul>
                <li>Name: Ruben Becks</li>
                <li>Age: 17</li>
                <li>Hometown/Residence: Arnemuiden</li>
                <li>Living with: Mother, Father and Little Brother</li>
                <li>Hobbies: Playing guitar, producing music and gaming</li>
            </ul>
        </div>
        <div id="prior">
            <h3>Education</h3>
            <ul>
                <li>Prior Education: VWO</li>
                <li>Profile: NT with Music and ICT</li>
                <li>Study Check Activities done:</li>
                <ol id="order2">
                    <li>
                        Study Choice Test
                    </li>
                    <li>
                        Open Day
                    </li>
                    <li>
                        Student for a day
                    </li>
                    <li>
                        Trial Study Day
                    </li>
                </ol>
            </ul>
            <p>After the study, I hope to become a software developer (and musician on the side) which I hope to learn in these four years.</p>
        </div>
        <div id="job">
            <h3>Job</h3>
            <ul>
                <li>Part time job: Not anymore</li>
                <li>Hours worked per week: around 24</li>
            </ul>
        </div>
        <div id="swot">
            <h3>SWOT-Analysis</h3>
            <ul>
                <li>Strengths: I learn quickly and work precisely</li>
                <li>Weaknesses: Sometimes I work too hastily</li>
                <li>Opportunities I see: Learning more about the world of computers and technology</li>
                <li>Threats I see: Having to deal with a lot of stuff at once</li>
            </ul>
        </div>
        <div id="addit">
            <h3>Additional information</h3>
            <ul>
                <li>Top level sports: No</li>
                <li>Factors that could hinder my study: I was diagnosed with Asperger's</li>
                <li>Additional facilities: Extra time for exams that take lots of sketching and drawing</li>
                <li>Questions I have about the study: None</li>
            </ul>
        </div>
    </div>
    <div id="personalinfo">
        <h1 class="middle">About Me</h1>
        <p>Hi! I am Ruben Becks, 17 years old and I live in Arnemuiden. I live with my mother, father and little brother. My hobbies are playing guitar, watching F1, nerding about the Tolkien Universe, producing music and gaming. The guitars are listed below. I produce music with FL Studio and some 3rd party plugins. And my favourite games are Horizon Forbidden West, GTA5, Minecraft, Subnautica, Elden Ring, Geometry Dash, Gran Turismo 7 and Assetto Corsa.</p>
        <p>Something important you should know about me is that I have Asperger's, a form of autism, which causes my fine motor skills to be relatively lacking compared to most people and that I sometimes kind of wander off into my own thoughts. But those issues are relatively minor nowadays, and it doesn't bother me anymore, with the exception of drawing which I have some difficulty with.</p>
        <p>During the vacations/breaks, I work at a company called <a target="_blank" href="https://rounded.com?sl=en"><span class="marker">Rounded</span></a>. We are a company that supplies device parts for devices like phones, tablets, coffee machines and gaming consoles. It's a really nice place since it's a small company and we're only with 3 people in the department I work in, so it's very relaxed. It's also work that fits me perfectly since you need to be very exact, which I personally excel at.</p>
        <p>Music has been one of my greatest passions since I was about 8 years old, and when I turned 10 years old I got a guitar for my birthday, and I was over the moon. Now, 7 years later, I have a whole bunch of guitars and I also produce, which I have been doing since 2020.</p>
        <p>Here is one of my songs:</p>
        <audio controls>
            <source src="song.mp3" type="audio/mpeg">
        </audio>
    </div>
    <div id="info1">
        <div id="socmed">
            <h1 class="middle">Where to find me</h1>
            <a target="_blank" href="https://www.instagram.com/rubenrmu/"><img class="smed" src="images/gram.webp"></a>
            <a target="_blank" href="https://auryle.newgrounds.com/"><img class="smed" src="images/ng.png"></a>
            <a target="_blank" href="https://www.youtube.com/@auryle"><img class="smed" src="images/yt.png"></a>
            <a target="_blank" href="https://www.twitch.tv/xtrboerman"><img class="smed" src="images/twitch.svg"></a>
            <a target="_blank" href="https://www.reddit.com/u/AuryleFL"><img class="smed" src="images/reddit.png"></a>
            <a target="_blank" href="https://steamcommunity.com/id/RubenRMU/"><img class="smed" src="images/steam.png"></a>
            <a target="_blank" href="https://soundcloud.com/aurylefl"><img class="smed" src="images/sc.png"></a>
            <a target="_blank" href="https://open.spotify.com/user/hhfk42xq5jbzi48idecp4e0yl?si=941d3880185046bb"><img class="smed" src="images/sptf.png"></a>
            <a target="_blank" href="https://github.com/Ruben-RMU"><img class="smed" src="images/gh.png"></a>
        </div>
        <div id="imag">
            <h1 class="middle">Images</h1>
            <div class="flexy">
                <div id="gaming">
                    <h2>Gaming</h2>
                    <img class="profimg" src="images/gamin.jpg">
                    <p>Here is a screenshot of when I got P3 in a race in Gran Turismo 7, a racing game which is lots of fun.</p>
                    <br>
                    <img class="profimg" src="images/hfw-logo.jpg">
                    <p>Here is a screenshot of my favourite game of all time: Horizon Forbidden West.</p>
                    <br>
                    <img class="profimg" src="images/ps4.jpg">
                    <p>My gaming setup: Just a PlayStation 4, a controller and a Philips Ambilight TV.</p>
                    <br>
                    <img class="profimg" src="images/pc.jpg">
                    <p>My PC gaming setup, a fairly basic PC with and Intel 9th gen i5 and a GTX 1660ti.</p>
                    <br>
                    <img class="profimg" src="images/assetto.png">
                    <p>My favourite racing game Assetto Corsa, a game where you can do everything from riding an F1 car at Spa to riding a T-Rex in the streets of Monaco.</p>
                    <br>
                    <img class="profimg" src="images/subnautica.jpg">
                    <p>Another one of my favourite games, Subnautica, a game where you explore an alien underwater world.</p>
                </div>
                <div id="music">
                    <h2>Music</h2>
                    <img class="profimg" src="images/guitarprs.jpg">
                    <p>My PRS SE Mark Holcomb signature 7 string guitar. This one plays like a dream, and I worked all summer of 2024 to afford it.</p>
                    <br>
                    <img class="profimg" src="images/guitarpaul.jpg">
                    <p>My first ever electric guitar. Had it modified a bit so it plays nicer, but still feels just as good as when I first got it.</p>
                    <br>
                    <img class="profimg" src="images/guitaribanez.jpg">
                    <p>My Ibanez JEM I got for my 13th birthday, and it's the guitar I have used the most.</p>
                    <br>
                    <img class="profimg" src="images/guitartwelve.jpg">
                    <p>My twelve-string acoustic D'Angelico, which sounds like how I imagine heaven sounds like.</p>
                    <br>
                    <img class="profimg" src="images/maiden.jpg">
                    <p>A photo I took when I went to an Iron Maiden concert in July 2023, to this date the coolest concert I've went to.</p>
                    <br>
                    <img class="profimg" src="images/periphery.webp">
                    <p>My personal favourite band: Periphery, a progressive metal/djent band from Washington D.C.</p>
                </div>
                <div id="passion">
                    <h2>Passions</h2>
                    <img class="profimg" src="images/senna.jpg">
                    <p>Formula One is my favourite sport to watch, I have also learned a ton of history of it.</p>
                    <br>
                    <img class="profimg" src="images/lotr.jpg">
                    <p>My favourite movies and books: the Lord of the Rings trilogy</p>
                    <br>
                    <img class="profimg" src="images/silmarillion.jpg">
                    <p>The book I'm currently reading: a first edition print of The Slmarillion, which I got from my English teacher as a gift for doing really well on an exam.</p>
                    <br>
                    <img class="profimg" src="images/sauron.jpg">
                    <p>Sauron is my favourite villain of all time, since they are such a cool character which an extremely deep backstory.</p>
                    <br>
                    <img class="profimg" src="images/lego.jpg">
                    <p>My lego set of Ayrton Senna's first title winning car from 1988, the McLaren MP4/4. </p>
                </div>
            </div>
        </div>
    </div>
@endsection
