<body>
    <h1>Feedback</h1>
    <form method="POST" action="thankyou.php">
    <!--Name-->
    Name: <input type="text" name="complete_name" /><br /><br />
    <!--Email-->
    Email Address: <input type="email" name="email" /><br /><br />
    <!--Feedback-->
    Type
        <select name="type">
            <option value="Inquiry">Inquiry</option>
            <option value="Feedback">Feedback</option>
            <option value="Other">Other</option>
        </select>
    <br /><br />
    Feedback Message: <textarea name="message" rows="5"></textarea><br /><br />
    <!--Satisfaction level-->
    Level of Satisfaction(0-10): <input type="range" name="satisfaction_level" min="0" max="10"/><br /><br />
    <!--Submit-->
    <input type="submit" name="submit" value="Submit">
</form>
</body>