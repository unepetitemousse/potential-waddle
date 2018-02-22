# potential-waddle

Test de recrutement

## TODO

1. Clone this git public repository, start a new branch. From now use git as a tool for this project.
1. Bootstrap your project with something capable of serving a raw "Hello World!" through a web-server.
1. Display some dynamic content based on the page:
   * Server UTC time, formatted using [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) format 
   * The HTTP client IP address
1. Now, allow user input of his name in a form, the form must not allow any string that is either empty-ish (null, empty, only spaces) or containing the letter Z.  
1. Upon form POST submission, store the username permanently (either a file, a database, a third part storage service).
1. Main page must now display list of usernames in cards respecting this html structure:
    ```html
    <div class="quotations">
      <blockquote>
        <span class="user">-- {Username}</span>
      </blockquote>
      <blockquote>
        <span class="user">-- {Username}</span>
      </blockquote>
      <!-- And so on -->  
    </div>
    ```
1. Main page must now display quotation for those users, the content is provided by [FOASS](https://www.foaas.com/) using the `/awesome/:from` endpoint.
    ```html
    <blockquote>
      {quotation}
      <span class="user">-- {Username}</span>
    </blockquote>
    ```
1. Use CSS in the page in order to:
   * Display user quotation within a box rounded purple corner, all quotations must use the same size.
   * User signature, in quotation must be bold, and be displayed on right bottom of the quotation.
   * Quotation should be aligned horizontally, if too large wrap it on a new line.
1. Needless to say, that you read this thoroughly before coding and prefixed all your function with `quack` from the beginning.
1. Username should now be anonymized upon display, and match this vague pattern:
    ```
    Raymond             Rayxxxx
    Camille             Camxxxx
    Jean                Jeaxxxx
    Charline            Chaxxxxx
    Sébastien           Sébxxxxxx
    Guillaumette        Guixxxxxx
    Anne-Henriette      Annxxxxxx
    Alain Dupaire       Alain D.
    David Henry Jones   David J.
    Zoe                 Z is bad
    ```

# Extras  
1. Write a minimal documentation describing:
   * The copyright
   * The author
   * The purpose of the code
   * Anything that may help succeeding developers how to operate and deploy your code
1. Randomize quotation using one of the following [FOASS](https://www.foaas.com/) endpoint:
   * `/asshole/:from`
   * `/because/:from`
   * `/bye/:from`
   * `/cup/:from`
   * `/everyone/:from`
   * `/everything/:from`
   * `/fyyff/:from`
   * `/horse/:from`
   * `/no/:from`
   * `/pink/:from`
1. Adapt the welcome text "Hello World" to visitor preferred language:
   * [English](http://www.localeplanet.com/icu/en-US/index.html) (default)
   * [French](http://www.localeplanet.com/icu/fr-FR/index.html)
   * [Spanish](http://www.localeplanet.com/icu/es-ES/index.html)
   * [Ukranian](http://www.localeplanet.com/icu/uk-UA/index.html)
   * [Japanese](http://www.localeplanet.com/icu/ja-JP/index.html) 
   * [Hebrew](http://www.localeplanet.com/icu/he-IL/index.html)
1. Display a preferred localized time format next to UTC server time. Format should match the user preferred language format:
   
   For example, `Friday, June 24, 2016 1:42 AM` for `en-US` user, and `Freitag, 24. Juni 2016 01:42` for `de-DE` uer
1. Style more:
   * Use a custom font for quotation text to make it looks more like a human written text.
   * Alternate colors for quotation, 5 distinct colors must be used using CSS instruction.
1. Minify and uglify anything javascript or css asset.
1. As we added new rules for anonymization, we decided to unit test that. Please add unit test to validate our house rules for anonymization:
    ```
    Henriette           Henriette
    Ari                 Axx
    Hal                 Hxx
    7up                 upupupupupupup
    1up                 up
    3eyes               eyeseyeseyes
    -10                 0
    10                  10
    909012391212        909012391212
    ```

# Expectation

This test intend to verify some capabilities:

* English language comprehension
* Bootstraping ability
* Basic HTTP comprehension (Headers, Verb)
* HTML and CSS basic usage, as well as more advanced features.
* Documented REST service usage
* Client side validation (javascript)
* Server side operations and serialization
* Unit test as a reflex
* General knowledge of internet features
* Use third part library as a reflex
* Autonomy, and proactiveness.