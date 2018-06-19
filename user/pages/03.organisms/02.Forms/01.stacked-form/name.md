---
title: 'Stacked form'
taxonomy:
    category:
        - docs
---

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet odio in eros scelerisque, sed pharetra libero cursus. Donec finibus suscipit porta. In egestas consequat tortor sed elementum. Aliquam aliquam accumsan dui id vulputate. Aenean dictum sem et nisl mollis, quis pretium purus consequat. Fusce convallis eget augue nec malesuada. 

### Example (contact form)

<form class="contact-form" action="" method="POST">
    <header>
        <h3>Contact us</h3>
    </header>
    <fieldset>
        <label for="full-name">Name:</label>
        <input type="text" name="full-name" placeholder="Enter your full name." tabindex="1" required >
        <label for="email-address">Email address:</label>
        <input type="email" name="email-address" placeholder="Enter your email address." tabindex="2" required >
        <label for="Phone number">Phone number:</label>
        <input type="tel" name="phone-number" placeholder="format: (555)444-8890" tabindex="3" required >
    </fieldset>
    <fieldset>
        <label for="message">Message:</label>
        <textarea name="message" tabindex="4" required ></textarea>
    </fieldset>
    <fieldset class="from-buttons">
        <button type="submit" name="submit-btn" value="Submit"></button>
        <button type="reset" name="reset-btn" value="Clear form"></button>
    </fieldset>
</form>

---

### Form without labels

<form class="contact-form" action="" method="POST">
    <header>
        <h3>Contact us</h3>
    </header>
    <fieldset>
        <input type="text" name="full-name" placeholder="Enter your full name." tabindex="1" required >
        <input type="email" name="email-address" placeholder="Enter your email address." tabindex="2" required >
        <input type="tel" name="phone-number" placeholder="Enter you phone number i.e (555)444-8890" tabindex="3" required >
    </fieldset>
    <fieldset>
        <textarea name="message" tabindex="4" placeholder="Enter your message." required ></textarea>
    </fieldset>
    <fieldset class="from-buttons">
        <button type="submit" name="submit-btn" value="Submit"></button>
        <button type="reset" name="reset-btn" value="Clear form"></button>
    </fieldset>
</form>