<style>
    div.flip {
        margin: auto;
    }
    a.flip {
        text-align: center;
        width: 200px;
        height: 20px;
    }
    a.button {
        color: white;
        border: solid 2px yellowgreen;
        border-radius: 5px;
        cursor: pointer; 
    }
</style>

<h1 id="myHeader">Welcome to my website!</h1>
    <div class="flip"><a class="flip button" onclick="onClick()">Click me to show my profile!</a></div>
    <p class="flip" style="color: white;">It is currently <a id="demo"></a>.</p>
    <div id="profile">
        <p style="font-size: 25px;text-align: center;">Hi! Hello! I'm <b style="font-size:25px;">Jaycee (or just JC)</b></p>
        <p>
            <b>Age:</b> 19 years old
            <br><b>Senior High School Graduated From? City the High School is located at:</b> Graduated from Senior Highschool in Asia Pacific College in Makati City
            <br><b>Course:</b> Bachelor of Science in Computer Science with specialization in Software and Systems
            <br><b>Scholarship?:</b> Yes
            <br><b>If yes, %?:</b> 20% Discount
            <br><b>type?:</b> APC Loyalty Discount 2021
            <br><b>Transferee / Second Course?:</b> No
            <br><b>Did you choose this course?:</b> Yes
            <br><b>Why Yes?:</b> I have a fascination with programming<del>, and game development wasn't an option anymore.</del>
            <br><b>I.T. Experience:</b> Previous subjects/lessons about coding (HTML, CSS, PHP, Python, Java), the bare basics of Unity, and a random YouTube tutorial on how to make a snake game with HTML.
            <br><b>Hobbies / Interests / libangan:</b> Playing games, watching VTubers or streamers, and reading novels.
            <br><b>Goals in life / pangarap sa buhay:</b> To make a game that would give someone <em>"post-game depression"</em>
            <br><b>What do you expect to learn from this course (Web Programming)?:</b> Well... web programming.
            <br><b>What do you want to learn to help you in your chosen Major?:</b> I mostly just want more knowledge and experience in programming. The more I know, the more experience I have in solving different problems.
            <br><b>Any other interesting aspects of your life that you would like to share?:</b> 
            <br>&emsp;I am in love with Japanese culture. I taught myself how to read their 2 most basic "alphabets", <i>Hiragana</i> and <i>Katakana</i>. I also know a bit of grammar and <i>Kanji</i>, but that's about it.
            <br>&emsp;I managed to join a translation group for VTubers, and the 2nd video we uploaded on the channel is our most famous one; I helped in the production of it too!
            <br><b>Add one or more pictures about yourself and your interests that you would like to share for your introduction:</b>
            <br><img src="https://imgur.com/sVq0GY1.png" alt='This should be a screenshot of "Aonahara Translations"'>
        </p>
    </div>
    <br>
    <a href="#" class="button" style="visibility: hidden;">Back to top</a>

    <script>
        // console.log(testFunction());
        const d = new Date();
        document.getElementById("demo").innerHTML = d.toDateString();
        // testFunction();
    </script>