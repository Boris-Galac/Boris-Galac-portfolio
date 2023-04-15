<form class="contact-form d-grid gap-3">
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['textarea'];
    $to = 'boris.galac@gmail.com';
    $subject = 'New message from ' . $name;
    $body = "Name: $name\n\nEmail: $email\n\nMessage: $message";
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\n";

    if (mail($to, $subject, $body, $headers)) {
        echo '<p class="contact-feedback success p-2">Your message has been sent successfully.</p>';
    } else {
        echo '<p class="contact-feedback fail p-2">There was a problem sending your message. Please try again later.</p>';
    }
}
?>
                  <div class="contact-form__input right">
                    <input class="input" type="text" name="name" id="name" />
                    <label for="name">Your full name</label>
                  </div>
                  <div class="contact-form__input right">
                    <input class="input" type="email" name="email" id="email" />
                    <label for="mail">Email</label>
                  </div>
                  <div class="contact-form__input right">
                    <textarea class="input"
                      name="textarea"
                      id="textarea"
                      cols="30"
                      rows="10"
                    ></textarea>
                    <label for="textarea">Leave your message</label>
                  </div>
                  <button class="contact-form__btn left" type="submit">
                    <div class="svg-wrapper-1">
                      <div class="svg-wrapper">
                        <svg
                          height="24"
                          width="24"
                          viewBox="0 0 24 24"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path d="M0 0h24v24H0z" fill="none"></path>
                          <path
                            d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"
                            fill="currentColor"
                          ></path>
                        </svg>
                      </div>
                    </div>
                    <span>Send</span>
                  </button>
                </form>