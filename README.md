"# laravel" 

…or create a new repository on the command line
```
echo "# laravel" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/endriazizi/laravel.git
git push -u origin master

```

Tree source with the following command:
```
tree /f /a |clip
```

```
Folder PATH listing for volume OSDisk
Volume serial number is 803D-5B36
C:.
|   .env
|   .env.example
|   .gitattributes
|   .gitignore
|   artisan
|   composer.json
|   composer.lock
|   package.json
|   phpunit.xml
|   server.php
|   webpack.mix.js
|   yarn.lock
|   
+---app
|   |   User.php
|   |   
|   +---Console
|   |       Kernel.php
|   |       
|   +---Exceptions
|   |       Handler.php
|   |       
|   +---Http
|   |   |   Kernel.php
|   |   |   
|   |   +---Controllers
|   |   |   |   Controller.php
|   |   |   |   
|   |   |   \---Auth
|   |   |           ForgotPasswordController.php
|   |   |           LoginController.php
|   |   |           RegisterController.php
|   |   |           ResetPasswordController.php
|   |   |           
|   |   \---Middleware
|   |           EncryptCookies.php
|   |           RedirectIfAuthenticated.php
|   |           TrimStrings.php
|   |           VerifyCsrfToken.php
|   |           
|   \---Providers
|           AppServiceProvider.php
|           AuthServiceProvider.php
|           BroadcastServiceProvider.php
|           EventServiceProvider.php
|           RouteServiceProvider.php
|           
+---bootstrap
|   |   app.php
|   |   autoload.php
|   |   
|   \---cache
|           .gitignore
|           services.php
|           
+---config
|       app.php
|       auth.php
|       broadcasting.php
|       cache.php
|       database.php
|       filesystems.php
|       mail.php
|       queue.php
|       services.php
|       session.php
|       view.php
|       
+---database
|   |   .gitignore
|   |   
|   +---factories
|   |       ModelFactory.php
|   |       
|   +---migrations
|   |       2014_10_12_000000_create_users_table.php
|   |       2014_10_12_100000_create_password_resets_table.php
|   |       
|   \---seeds
|           DatabaseSeeder.php
|           
+---public
|   |   .htaccess
|   |   favicon.ico
|   |   index.php
|   |   robots.txt
|   |   
|   +---css
|   |       app.css
|   |       
|   \---js
|           app.js
|           
+---resources
|   +---assets
|   |   +---js
|   |   |   |   app.js
|   |   |   |   bootstrap.js
|   |   |   |   
|   |   |   \---components
|   |   |           Example.vue
|   |   |           
|   |   \---sass
|   |           app.scss
|   |           _variables.scss
|   |           
|   +---lang
|   |   \---en
|   |           auth.php
|   |           pagination.php
|   |           passwords.php
|   |           validation.php
|   |           
|   \---views
|           welcome.blade.php
|           
+---routes
|       api.php
|       channels.php
|       console.php
|       web.php
|       
+---storage
|   +---app
|   |   |   .gitignore
|   |   |   
|   |   \---public
|   |           .gitignore
|   |           
|   +---framework
|   |   |   .gitignore
|   |   |   
|   |   +---cache
|   |   |       .gitignore
|   |   |       
|   |   +---sessions
|   |   |       .gitignore
|   |   |       
|   |   +---testing
|   |   |       .gitignore
|   |   |       
|   |   \---views
|   |           .gitignore
|   |           
|   \---logs
|           .gitignore
|           
+---tests
|   |   CreatesApplication.php
|   |   TestCase.php
|   |   
|   +---Feature
|   |       ExampleTest.php
|   |       
|   \---Unit
|           ExampleTest.php
|           
\---vendor
    |   autoload.php
    |   
    +---bin
    |       php-parse
    |       php-parse.bat
    |       phpunit
    |       phpunit.bat
    |       psysh
    |       psysh.bat
    |       
    +---composer
    |       autoload_classmap.php
    |       autoload_files.php
    |       autoload_namespaces.php
    |       autoload_psr4.php
    |       autoload_real.php
    |       autoload_static.php
    |       ClassLoader.php
    |       installed.json
    |       LICENSE
    |       
    +---dnoegel
    |   \---php-xdg-base-dir
    |       |   .gitignore
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---src
    |       |       Xdg.php
    |       |       
    |       \---tests
    |               XdgTest.php
    |               
    +---doctrine
    |   +---inflector
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---lib
    |   |   |   \---Doctrine
    |   |   |       \---Common
    |   |   |           \---Inflector
    |   |   |                   Inflector.php
    |   |   |                   
    |   |   \---tests
    |   |       \---Doctrine
    |   |           \---Tests
    |   |               |   DoctrineTestCase.php
    |   |               |   TestInit.php
    |   |               |   
    |   |               \---Common
    |   |                   \---Inflector
    |   |                           InflectorTest.php
    |   |                           
    |   \---instantiator
    |       |   .gitignore
    |       |   .scrutinizer.yml
    |       |   .travis.install.sh
    |       |   .travis.yml
    |       |   composer.json
    |       |   CONTRIBUTING.md
    |       |   LICENSE
    |       |   phpmd.xml.dist
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---src
    |       |   \---Doctrine
    |       |       \---Instantiator
    |       |           |   Instantiator.php
    |       |           |   InstantiatorInterface.php
    |       |           |   
    |       |           \---Exception
    |       |                   ExceptionInterface.php
    |       |                   InvalidArgumentException.php
    |       |                   UnexpectedValueException.php
    |       |                   
    |       \---tests
    |           \---DoctrineTest
    |               +---InstantiatorPerformance
    |               |       InstantiatorPerformanceEvent.php
    |               |       
    |               +---InstantiatorTest
    |               |   |   InstantiatorTest.php
    |               |   |   
    |               |   \---Exception
    |               |           InvalidArgumentExceptionTest.php
    |               |           UnexpectedValueExceptionTest.php
    |               |           
    |               \---InstantiatorTestAsset
    |                       AbstractClassAsset.php
    |                       ArrayObjectAsset.php
    |                       ExceptionAsset.php
    |                       FinalExceptionAsset.php
    |                       PharAsset.php
    |                       PharExceptionAsset.php
    |                       SerializableArrayObjectAsset.php
    |                       SimpleSerializableAsset.php
    |                       SimpleTraitAsset.php
    |                       UnCloneableAsset.php
    |                       UnserializeExceptionArrayObjectAsset.php
    |                       WakeUpNoticesAsset.php
    |                       XMLReaderAsset.php
    |                       
    +---erusev
    |   \---parsedown
    |       |   .travis.yml
    |       |   composer.json
    |       |   LICENSE.txt
    |       |   Parsedown.php
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       \---test
    |           |   bootstrap.php
    |           |   CommonMarkTest.php
    |           |   ParsedownTest.php
    |           |   TestParsedown.php
    |           |   
    |           \---data
    |                   aesthetic_table.html
    |                   aesthetic_table.md
    |                   aligned_table.html
    |                   aligned_table.md
    |                   atx_heading.html
    |                   atx_heading.md
    |                   automatic_link.html
    |                   automatic_link.md
    |                   block-level_html.html
    |                   block-level_html.md
    |                   code_block.html
    |                   code_block.md
    |                   code_span.html
    |                   code_span.md
    |                   compound_blockquote.html
    |                   compound_blockquote.md
    |                   compound_emphasis.html
    |                   compound_emphasis.md
    |                   compound_list.html
    |                   compound_list.md
    |                   deeply_nested_list.html
    |                   deeply_nested_list.md
    |                   email.html
    |                   email.md
    |                   emphasis.html
    |                   emphasis.md
    |                   em_strong.html
    |                   em_strong.md
    |                   escaping.html
    |                   escaping.md
    |                   fenced_code_block.html
    |                   fenced_code_block.md
    |                   horizontal_rule.html
    |                   horizontal_rule.md
    |                   html_comment.html
    |                   html_comment.md
    |                   html_entity.html
    |                   html_entity.md
    |                   image_reference.html
    |                   image_reference.md
    |                   image_title.html
    |                   image_title.md
    |                   implicit_reference.html
    |                   implicit_reference.md
    |                   inline_link.html
    |                   inline_link.md
    |                   inline_link_title.html
    |                   inline_link_title.md
    |                   inline_title.html
    |                   inline_title.md
    |                   lazy_blockquote.html
    |                   lazy_blockquote.md
    |                   lazy_list.html
    |                   lazy_list.md
    |                   line_break.html
    |                   line_break.md
    |                   multiline_list_paragraph.html
    |                   multiline_list_paragraph.md
    |                   nested_block-level_html.html
    |                   nested_block-level_html.md
    |                   ordered_list.html
    |                   ordered_list.md
    |                   paragraph_list.html
    |                   paragraph_list.md
    |                   reference_title.html
    |                   reference_title.md
    |                   self-closing_html.html
    |                   self-closing_html.md
    |                   separated_nested_list.html
    |                   separated_nested_list.md
    |                   setext_header.html
    |                   setext_header.md
    |                   simple_blockquote.html
    |                   simple_blockquote.md
    |                   simple_table.html
    |                   simple_table.md
    |                   span-level_html.html
    |                   span-level_html.md
    |                   sparse_dense_list.html
    |                   sparse_dense_list.md
    |                   sparse_html.html
    |                   sparse_html.md
    |                   sparse_list.html
    |                   sparse_list.md
    |                   special_characters.html
    |                   special_characters.md
    |                   strikethrough.html
    |                   strikethrough.md
    |                   strong_em.html
    |                   strong_em.md
    |                   tab-indented_code_block.html
    |                   tab-indented_code_block.md
    |                   table_inline_markdown.html
    |                   table_inline_markdown.md
    |                   text_reference.html
    |                   text_reference.md
    |                   unordered_list.html
    |                   unordered_list.md
    |                   untidy_table.html
    |                   untidy_table.md
    |                   url_autolinking.html
    |                   url_autolinking.md
    |                   whitespace.html
    |                   whitespace.md
    |                   
    +---fzaninotto
    |   \---faker
    |       |   .gitignore
    |       |   .travis.yml
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   CONTRIBUTING.md
    |       |   LICENSE
    |       |   Makefile
    |       |   phpunit.xml.dist
    |       |   readme.md
    |       |   
    |       +---src
    |       |   |   autoload.php
    |       |   |   
    |       |   \---Faker
    |       |       |   DefaultGenerator.php
    |       |       |   Documentor.php
    |       |       |   Factory.php
    |       |       |   Generator.php
    |       |       |   UniqueGenerator.php
    |       |       |   ValidGenerator.php
    |       |       |   
    |       |       +---Calculator
    |       |       |       Iban.php
    |       |       |       Luhn.php
    |       |       |       
    |       |       +---Guesser
    |       |       |       Name.php
    |       |       |       
    |       |       +---ORM
    |       |       |   +---CakePHP
    |       |       |   |       ColumnTypeGuesser.php
    |       |       |   |       EntityPopulator.php
    |       |       |   |       Populator.php
    |       |       |   |       
    |       |       |   +---Doctrine
    |       |       |   |       ColumnTypeGuesser.php
    |       |       |   |       EntityPopulator.php
    |       |       |   |       Populator.php
    |       |       |   |       
    |       |       |   +---Mandango
    |       |       |   |       ColumnTypeGuesser.php
    |       |       |   |       EntityPopulator.php
    |       |       |   |       Populator.php
    |       |       |   |       
    |       |       |   +---Propel
    |       |       |   |       ColumnTypeGuesser.php
    |       |       |   |       EntityPopulator.php
    |       |       |   |       Populator.php
    |       |       |   |       
    |       |       |   +---Propel2
    |       |       |   |       ColumnTypeGuesser.php
    |       |       |   |       EntityPopulator.php
    |       |       |   |       Populator.php
    |       |       |   |       
    |       |       |   \---Spot
    |       |       |           ColumnTypeGuesser.php
    |       |       |           EntityPopulator.php
    |       |       |           Populator.php
    |       |       |           
    |       |       \---Provider
    |       |           |   Address.php
    |       |           |   Barcode.php
    |       |           |   Base.php
    |       |           |   Biased.php
    |       |           |   Color.php
    |       |           |   Company.php
    |       |           |   DateTime.php
    |       |           |   File.php
    |       |           |   Image.php
    |       |           |   Internet.php
    |       |           |   Lorem.php
    |       |           |   Miscellaneous.php
    |       |           |   Payment.php
    |       |           |   Person.php
    |       |           |   PhoneNumber.php
    |       |           |   Text.php
    |       |           |   UserAgent.php
    |       |           |   Uuid.php
    |       |           |   
    |       |           +---ar_JO
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---ar_SA
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---at_AT
    |       |           |       Payment.php
    |       |           |       
    |       |           +---bg_BG
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---bn_BD
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Utils.php
    |       |           |       
    |       |           +---cs_CZ
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       DateTime.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---da_DK
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---de_AT
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---de_CH
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---de_DE
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---el_GR
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---en_AU
    |       |           |       Address.php
    |       |           |       Internet.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_CA
    |       |           |       Address.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_GB
    |       |           |       Address.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_IN
    |       |           |       Address.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_NZ
    |       |           |       Address.php
    |       |           |       Internet.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_PH
    |       |           |       Address.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_SG
    |       |           |       Address.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_UG
    |       |           |       Address.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---en_US
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---en_ZA
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---es_AR
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---es_ES
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---es_PE
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---es_VE
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---fa_IR
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---fi_FI
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---fr_BE
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---fr_CA
    |       |           |       Address.php
    |       |           |       Person.php
    |       |           |       
    |       |           +---fr_CH
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---fr_FR
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---he_IL
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---hr_HR
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---hu_HU
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---hy_AM
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---id_ID
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---is_IS
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---it_CH
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---it_IT
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---ja_JP
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---ka_GE
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       DateTime.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---kk_KZ
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---ko_KR
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---lt_LT
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---lv_LV
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---me_ME
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---mn_MN
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---nb_NO
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---ne_NP
    |       |           |       Address.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---nl_BE
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---nl_NL
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---pl_PL
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---pt_BR
    |       |           |       Address.php
    |       |           |       check_digit.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---pt_PT
    |       |           |       Address.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---ro_MD
    |       |           |       Address.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---ro_RO
    |       |           |       Address.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---ru_RU
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---sk_SK
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---sl_SI
    |       |           |       Address.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---sr_Cyrl_RS
    |       |           |       Address.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       
    |       |           +---sr_Latn_RS
    |       |           |       Address.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       
    |       |           +---sr_RS
    |       |           |       Address.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       
    |       |           +---sv_SE
    |       |           |       Address.php
    |       |           |       Company.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---tr_TR
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       DateTime.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---uk_UA
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Company.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       Text.php
    |       |           |       
    |       |           +---vi_VN
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Internet.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           +---zh_CN
    |       |           |       Address.php
    |       |           |       Color.php
    |       |           |       Company.php
    |       |           |       DateTime.php
    |       |           |       Internet.php
    |       |           |       Payment.php
    |       |           |       Person.php
    |       |           |       PhoneNumber.php
    |       |           |       
    |       |           \---zh_TW
    |       |                   Address.php
    |       |                   Color.php
    |       |                   Company.php
    |       |                   DateTime.php
    |       |                   Internet.php
    |       |                   Payment.php
    |       |                   Person.php
    |       |                   PhoneNumber.php
    |       |                   Text.php
    |       |                   
    |       \---test
    |           |   documentor.php
    |           |   test.php
    |           |   
    |           \---Faker
    |               |   DefaultGeneratorTest.php
    |               |   GeneratorTest.php
    |               |   
    |               +---Calculator
    |               |       IbanTest.php
    |               |       LuhnTest.php
    |               |       
    |               \---Provider
    |                   |   AddressTest.php
    |                   |   BarcodeTest.php
    |                   |   BaseTest.php
    |                   |   BiasedTest.php
    |                   |   ColorTest.php
    |                   |   CompanyTest.php
    |                   |   DateTimeTest.php
    |                   |   ImageTest.php
    |                   |   InternetTest.php
    |                   |   LocalizationTest.php
    |                   |   LoremTest.php
    |                   |   MiscellaneousTest.php
    |                   |   PaymentTest.php
    |                   |   PersonTest.php
    |                   |   PhoneNumberTest.php
    |                   |   ProviderOverrideTest.php
    |                   |   TextTest.php
    |                   |   UserAgentTest.php
    |                   |   UuidTest.php
    |                   |   
    |                   +---ar_JO
    |                   |       InternetTest.php
    |                   |       
    |                   +---ar_SA
    |                   |       InternetTest.php
    |                   |       
    |                   +---at_AT
    |                   |       PaymentTest.php
    |                   |       
    |                   +---bg_BG
    |                   |       PaymentTest.php
    |                   |       
    |                   +---bn_BD
    |                   |       PersonTest.php
    |                   |       
    |                   +---cs_CZ
    |                   |       PersonTest.php
    |                   |       
    |                   +---da_DK
    |                   |       InternetTest.php
    |                   |       
    |                   +---de_AT
    |                   |       InternetTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---de_CH
    |                   |       AddressTest.php
    |                   |       InternetTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---de_DE
    |                   |       InternetTest.php
    |                   |       
    |                   +---en_AU
    |                   |       AddressTest.php
    |                   |       
    |                   +---en_CA
    |                   |       AddressTest.php
    |                   |       
    |                   +---en_IN
    |                   |       AddressTest.php
    |                   |       
    |                   +---en_NZ
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---en_PH
    |                   |       AddressTest.php
    |                   |       
    |                   +---en_SG
    |                   |       AddressTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---en_UG
    |                   |       AddressTest.php
    |                   |       
    |                   +---en_US
    |                   |       PaymentTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---en_ZA
    |                   |       CompanyTest.php
    |                   |       InternetTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---es_ES
    |                   |       PersonTest.php
    |                   |       
    |                   +---fi_FI
    |                   |       InternetTest.php
    |                   |       
    |                   +---fr_BE
    |                   |       PaymentTest.php
    |                   |       
    |                   +---fr_CH
    |                   |       AddressTest.php
    |                   |       InternetTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---fr_FR
    |                   |       CompanyTest.php
    |                   |       
    |                   +---id_ID
    |                   |       PersonTest.php
    |                   |       
    |                   +---it_CH
    |                   |       AddressTest.php
    |                   |       InternetTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---it_IT
    |                   |       CompanyTest.php
    |                   |       PersonTest.php
    |                   |       
    |                   +---ja_JP
    |                   |       PersonTest.php
    |                   |       
    |                   +---mn_MN
    |                   |       PersonTest.php
    |                   |       
    |                   +---nl_BE
    |                   |       PaymentTest.php
    |                   |       
    |                   +---nl_NL
    |                   |       CompanyTest.php
    |                   |       
    |                   +---pt_BR
    |                   |       CompanyTest.php
    |                   |       PersonTest.php
    |                   |       
    |                   +---pt_PT
    |                   |       AddressTest.php
    |                   |       PersonTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---ro_RO
    |                   |       PersonTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   +---sv_SE
    |                   |       PersonTest.php
    |                   |       
    |                   +---uk_UA
    |                   |       AddressTest.php
    |                   |       PhoneNumberTest.php
    |                   |       
    |                   \---zh_TW
    |                           TextTest.php
    |                           
    +---hamcrest
    |   \---hamcrest-php
    |       |   .coveralls.yml
    |       |   .gitignore
    |       |   .gush.yml
    |       |   .travis.yml
    |       |   CHANGES.txt
    |       |   composer.json
    |       |   LICENSE.txt
    |       |   README.md
    |       |   TODO.txt
    |       |   
    |       +---generator
    |       |   |   FactoryCall.php
    |       |   |   FactoryClass.php
    |       |   |   FactoryFile.php
    |       |   |   FactoryGenerator.php
    |       |   |   FactoryMethod.php
    |       |   |   FactoryParameter.php
    |       |   |   GlobalFunctionFile.php
    |       |   |   run.php
    |       |   |   StaticMethodFile.php
    |       |   |   
    |       |   \---parts
    |       |           file_header.txt
    |       |           functions_footer.txt
    |       |           functions_header.txt
    |       |           functions_imports.txt
    |       |           matchers_footer.txt
    |       |           matchers_header.txt
    |       |           matchers_imports.txt
    |       |           
    |       +---hamcrest
    |       |   |   Hamcrest.php
    |       |   |   
    |       |   \---Hamcrest
    |       |       |   AssertionError.php
    |       |       |   BaseDescription.php
    |       |       |   BaseMatcher.php
    |       |       |   Description.php
    |       |       |   DiagnosingMatcher.php
    |       |       |   FeatureMatcher.php
    |       |       |   Matcher.php
    |       |       |   MatcherAssert.php
    |       |       |   Matchers.php
    |       |       |   NullDescription.php
    |       |       |   SelfDescribing.php
    |       |       |   StringDescription.php
    |       |       |   TypeSafeDiagnosingMatcher.php
    |       |       |   TypeSafeMatcher.php
    |       |       |   Util.php
    |       |       |   
    |       |       +---Arrays
    |       |       |       IsArray.php
    |       |       |       IsArrayContaining.php
    |       |       |       IsArrayContainingInAnyOrder.php
    |       |       |       IsArrayContainingInOrder.php
    |       |       |       IsArrayContainingKey.php
    |       |       |       IsArrayContainingKeyValuePair.php
    |       |       |       IsArrayWithSize.php
    |       |       |       MatchingOnce.php
    |       |       |       SeriesMatchingOnce.php
    |       |       |       
    |       |       +---Collection
    |       |       |       IsEmptyTraversable.php
    |       |       |       IsTraversableWithSize.php
    |       |       |       
    |       |       +---Core
    |       |       |       AllOf.php
    |       |       |       AnyOf.php
    |       |       |       CombinableMatcher.php
    |       |       |       DescribedAs.php
    |       |       |       Every.php
    |       |       |       HasToString.php
    |       |       |       Is.php
    |       |       |       IsAnything.php
    |       |       |       IsCollectionContaining.php
    |       |       |       IsEqual.php
    |       |       |       IsIdentical.php
    |       |       |       IsInstanceOf.php
    |       |       |       IsNot.php
    |       |       |       IsNull.php
    |       |       |       IsSame.php
    |       |       |       IsTypeOf.php
    |       |       |       Set.php
    |       |       |       ShortcutCombination.php
    |       |       |       
    |       |       +---Internal
    |       |       |       SelfDescribingValue.php
    |       |       |       
    |       |       +---Number
    |       |       |       IsCloseTo.php
    |       |       |       OrderingComparison.php
    |       |       |       
    |       |       +---Text
    |       |       |       IsEmptyString.php
    |       |       |       IsEqualIgnoringCase.php
    |       |       |       IsEqualIgnoringWhiteSpace.php
    |       |       |       MatchesPattern.php
    |       |       |       StringContains.php
    |       |       |       StringContainsIgnoringCase.php
    |       |       |       StringContainsInOrder.php
    |       |       |       StringEndsWith.php
    |       |       |       StringStartsWith.php
    |       |       |       SubstringMatcher.php
    |       |       |       
    |       |       +---Type
    |       |       |       IsArray.php
    |       |       |       IsBoolean.php
    |       |       |       IsCallable.php
    |       |       |       IsDouble.php
    |       |       |       IsInteger.php
    |       |       |       IsNumeric.php
    |       |       |       IsObject.php
    |       |       |       IsResource.php
    |       |       |       IsScalar.php
    |       |       |       IsString.php
    |       |       |       
    |       |       \---Xml
    |       |               HasXPath.php
    |       |               
    |       \---tests
    |           |   bootstrap.php
    |           |   phpunit.xml.dist
    |           |   
    |           \---Hamcrest
    |               |   AbstractMatcherTest.php
    |               |   BaseMatcherTest.php
    |               |   FeatureMatcherTest.php
    |               |   MatcherAssertTest.php
    |               |   StringDescriptionTest.php
    |               |   UtilTest.php
    |               |   
    |               +---Array
    |               |       IsArrayContainingInAnyOrderTest.php
    |               |       IsArrayContainingInOrderTest.php
    |               |       IsArrayContainingKeyTest.php
    |               |       IsArrayContainingKeyValuePairTest.php
    |               |       IsArrayContainingTest.php
    |               |       IsArrayTest.php
    |               |       IsArrayWithSizeTest.php
    |               |       
    |               +---Collection
    |               |       IsEmptyTraversableTest.php
    |               |       IsTraversableWithSizeTest.php
    |               |       
    |               +---Core
    |               |       AllOfTest.php
    |               |       AnyOfTest.php
    |               |       CombinableMatcherTest.php
    |               |       DescribedAsTest.php
    |               |       EveryTest.php
    |               |       HasToStringTest.php
    |               |       IsAnythingTest.php
    |               |       IsCollectionContainingTest.php
    |               |       IsEqualTest.php
    |               |       IsIdenticalTest.php
    |               |       IsInstanceOfTest.php
    |               |       IsNotTest.php
    |               |       IsNullTest.php
    |               |       IsSameTest.php
    |               |       IsTest.php
    |               |       IsTypeOfTest.php
    |               |       SampleBaseClass.php
    |               |       SampleSubClass.php
    |               |       SetTest.php
    |               |       
    |               +---Number
    |               |       IsCloseToTest.php
    |               |       OrderingComparisonTest.php
    |               |       
    |               +---Text
    |               |       IsEmptyStringTest.php
    |               |       IsEqualIgnoringCaseTest.php
    |               |       IsEqualIgnoringWhiteSpaceTest.php
    |               |       MatchesPatternTest.php
    |               |       StringContainsIgnoringCaseTest.php
    |               |       StringContainsInOrderTest.php
    |               |       StringContainsTest.php
    |               |       StringEndsWithTest.php
    |               |       StringStartsWithTest.php
    |               |       
    |               +---Type
    |               |       IsArrayTest.php
    |               |       IsBooleanTest.php
    |               |       IsCallableTest.php
    |               |       IsDoubleTest.php
    |               |       IsIntegerTest.php
    |               |       IsNumericTest.php
    |               |       IsObjectTest.php
    |               |       IsResourceTest.php
    |               |       IsScalarTest.php
    |               |       IsStringTest.php
    |               |       
    |               \---Xml
    |                       HasXPathTest.php
    |                       
    +---jakub-onderka
    |   +---php-console-color
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   example.php
    |   |   |   phpunit.xml
    |   |   |   
    |   |   +---src
    |   |   |   \---JakubOnderka
    |   |   |       \---PhpConsoleColor
    |   |   |               ConsoleColor.php
    |   |   |               InvalidStyleException.php
    |   |   |               
    |   |   \---tests
    |   |       |   bootstrap.php
    |   |       |   
    |   |       \---JakubOnderka
    |   |           \---PhpConsoleColor
    |   |                   ConsoleColorTest.php
    |   |                   
    |   \---php-console-highlighter
    |       |   .gitignore
    |       |   .travis.yml
    |       |   build.xml
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml
    |       |   README.md
    |       |   
    |       +---examples
    |       |       snippet.php
    |       |       whole_file.php
    |       |       whole_file_line_numbers.php
    |       |       
    |       +---src
    |       |   \---JakubOnderka
    |       |       \---PhpConsoleHighlighter
    |       |               Highlighter.php
    |       |               
    |       \---tests
    |           |   bootstrap.php
    |           |   
    |           \---JakubOnderka
    |               \---PhpConsoleHighligter
    |                       HigligterTest.php
    |                       
    +---laravel
    |   +---framework
    |   |   |   .editorconfig
    |   |   |   .gitattributes
    |   |   |   .gitignore
    |   |   |   .php_cs
    |   |   |   .travis.yml
    |   |   |   CHANGELOG-5.2.md
    |   |   |   CHANGELOG-5.3.md
    |   |   |   CHANGELOG-5.4.md
    |   |   |   CODE_OF_CONDUCT.md
    |   |   |   composer.json
    |   |   |   CONTRIBUTING.md
    |   |   |   LICENSE.md
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---.github
    |   |   |       ISSUE_TEMPLATE.md
    |   |   |       
    |   |   +---build
    |   |   |       illuminate-split-faster.sh
    |   |   |       illuminate-split-full.sh
    |   |   |       illuminate-split.sh
    |   |   |       
    |   |   +---src
    |   |   |   \---Illuminate
    |   |   |       +---Auth
    |   |   |       |   |   Authenticatable.php
    |   |   |       |   |   AuthenticationException.php
    |   |   |       |   |   AuthManager.php
    |   |   |       |   |   AuthServiceProvider.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   CreatesUserProviders.php
    |   |   |       |   |   DatabaseUserProvider.php
    |   |   |       |   |   EloquentUserProvider.php
    |   |   |       |   |   GenericUser.php
    |   |   |       |   |   GuardHelpers.php
    |   |   |       |   |   Recaller.php
    |   |   |       |   |   RequestGuard.php
    |   |   |       |   |   SessionGuard.php
    |   |   |       |   |   TokenGuard.php
    |   |   |       |   |   
    |   |   |       |   +---Access
    |   |   |       |   |       AuthorizationException.php
    |   |   |       |   |       Gate.php
    |   |   |       |   |       HandlesAuthorization.php
    |   |   |       |   |       Response.php
    |   |   |       |   |       
    |   |   |       |   +---Console
    |   |   |       |   |   |   ClearResetsCommand.php
    |   |   |       |   |   |   MakeAuthCommand.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |       \---make
    |   |   |       |   |           |   routes.stub
    |   |   |       |   |           |   
    |   |   |       |   |           +---controllers
    |   |   |       |   |           |       HomeController.stub
    |   |   |       |   |           |       
    |   |   |       |   |           \---views
    |   |   |       |   |               |   home.stub
    |   |   |       |   |               |   
    |   |   |       |   |               +---auth
    |   |   |       |   |               |   |   login.stub
    |   |   |       |   |               |   |   register.stub
    |   |   |       |   |               |   |   
    |   |   |       |   |               |   \---passwords
    |   |   |       |   |               |           email.stub
    |   |   |       |   |               |           reset.stub
    |   |   |       |   |               |           
    |   |   |       |   |               \---layouts
    |   |   |       |   |                       app.stub
    |   |   |       |   |                       
    |   |   |       |   +---Events
    |   |   |       |   |       Attempting.php
    |   |   |       |   |       Authenticated.php
    |   |   |       |   |       Failed.php
    |   |   |       |   |       Lockout.php
    |   |   |       |   |       Login.php
    |   |   |       |   |       Logout.php
    |   |   |       |   |       Registered.php
    |   |   |       |   |       
    |   |   |       |   +---Middleware
    |   |   |       |   |       Authenticate.php
    |   |   |       |   |       AuthenticateWithBasicAuth.php
    |   |   |       |   |       Authorize.php
    |   |   |       |   |       
    |   |   |       |   +---Notifications
    |   |   |       |   |       ResetPassword.php
    |   |   |       |   |       
    |   |   |       |   \---Passwords
    |   |   |       |           CanResetPassword.php
    |   |   |       |           DatabaseTokenRepository.php
    |   |   |       |           PasswordBroker.php
    |   |   |       |           PasswordBrokerManager.php
    |   |   |       |           PasswordResetServiceProvider.php
    |   |   |       |           TokenRepositoryInterface.php
    |   |   |       |           
    |   |   |       +---Broadcasting
    |   |   |       |   |   BroadcastController.php
    |   |   |       |   |   BroadcastEvent.php
    |   |   |       |   |   BroadcastException.php
    |   |   |       |   |   BroadcastManager.php
    |   |   |       |   |   BroadcastServiceProvider.php
    |   |   |       |   |   Channel.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   InteractsWithSockets.php
    |   |   |       |   |   PendingBroadcast.php
    |   |   |       |   |   PresenceChannel.php
    |   |   |       |   |   PrivateChannel.php
    |   |   |       |   |   
    |   |   |       |   \---Broadcasters
    |   |   |       |           Broadcaster.php
    |   |   |       |           LogBroadcaster.php
    |   |   |       |           NullBroadcaster.php
    |   |   |       |           PusherBroadcaster.php
    |   |   |       |           RedisBroadcaster.php
    |   |   |       |           
    |   |   |       +---Bus
    |   |   |       |       BusServiceProvider.php
    |   |   |       |       composer.json
    |   |   |       |       Dispatcher.php
    |   |   |       |       Queueable.php
    |   |   |       |       
    |   |   |       +---Cache
    |   |   |       |   |   ApcStore.php
    |   |   |       |   |   ApcWrapper.php
    |   |   |       |   |   ArrayStore.php
    |   |   |       |   |   CacheManager.php
    |   |   |       |   |   CacheServiceProvider.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   DatabaseStore.php
    |   |   |       |   |   FileStore.php
    |   |   |       |   |   MemcachedConnector.php
    |   |   |       |   |   MemcachedStore.php
    |   |   |       |   |   NullStore.php
    |   |   |       |   |   RateLimiter.php
    |   |   |       |   |   RedisStore.php
    |   |   |       |   |   RedisTaggedCache.php
    |   |   |       |   |   Repository.php
    |   |   |       |   |   RetrievesMultipleKeys.php
    |   |   |       |   |   TaggableStore.php
    |   |   |       |   |   TaggedCache.php
    |   |   |       |   |   TagSet.php
    |   |   |       |   |   
    |   |   |       |   +---Console
    |   |   |       |   |   |   CacheTableCommand.php
    |   |   |       |   |   |   ClearCommand.php
    |   |   |       |   |   |   ForgetCommand.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |           cache.stub
    |   |   |       |   |           
    |   |   |       |   \---Events
    |   |   |       |           CacheEvent.php
    |   |   |       |           CacheHit.php
    |   |   |       |           CacheMissed.php
    |   |   |       |           KeyForgotten.php
    |   |   |       |           KeyWritten.php
    |   |   |       |           
    |   |   |       +---Config
    |   |   |       |       composer.json
    |   |   |       |       Repository.php
    |   |   |       |       
    |   |   |       +---Console
    |   |   |       |   |   Application.php
    |   |   |       |   |   Command.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   ConfirmableTrait.php
    |   |   |       |   |   DetectsApplicationNamespace.php
    |   |   |       |   |   GeneratorCommand.php
    |   |   |       |   |   OutputStyle.php
    |   |   |       |   |   Parser.php
    |   |   |       |   |   
    |   |   |       |   +---Events
    |   |   |       |   |       ArtisanStarting.php
    |   |   |       |   |       
    |   |   |       |   \---Scheduling
    |   |   |       |           CacheMutex.php
    |   |   |       |           CallbackEvent.php
    |   |   |       |           CommandBuilder.php
    |   |   |       |           Event.php
    |   |   |       |           ManagesFrequencies.php
    |   |   |       |           Mutex.php
    |   |   |       |           Schedule.php
    |   |   |       |           ScheduleFinishCommand.php
    |   |   |       |           ScheduleRunCommand.php
    |   |   |       |           
    |   |   |       +---Container
    |   |   |       |       BoundMethod.php
    |   |   |       |       composer.json
    |   |   |       |       Container.php
    |   |   |       |       ContextualBindingBuilder.php
    |   |   |       |       
    |   |   |       +---Contracts
    |   |   |       |   |   composer.json
    |   |   |       |   |   
    |   |   |       |   +---Auth
    |   |   |       |   |   |   Authenticatable.php
    |   |   |       |   |   |   CanResetPassword.php
    |   |   |       |   |   |   Factory.php
    |   |   |       |   |   |   Guard.php
    |   |   |       |   |   |   PasswordBroker.php
    |   |   |       |   |   |   PasswordBrokerFactory.php
    |   |   |       |   |   |   StatefulGuard.php
    |   |   |       |   |   |   SupportsBasicAuth.php
    |   |   |       |   |   |   UserProvider.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---Access
    |   |   |       |   |           Authorizable.php
    |   |   |       |   |           Gate.php
    |   |   |       |   |           
    |   |   |       |   +---Broadcasting
    |   |   |       |   |       Broadcaster.php
    |   |   |       |   |       Factory.php
    |   |   |       |   |       ShouldBroadcast.php
    |   |   |       |   |       ShouldBroadcastNow.php
    |   |   |       |   |       
    |   |   |       |   +---Bus
    |   |   |       |   |       Dispatcher.php
    |   |   |       |   |       QueueingDispatcher.php
    |   |   |       |   |       
    |   |   |       |   +---Cache
    |   |   |       |   |       Factory.php
    |   |   |       |   |       Repository.php
    |   |   |       |   |       Store.php
    |   |   |       |   |       
    |   |   |       |   +---Config
    |   |   |       |   |       Repository.php
    |   |   |       |   |       
    |   |   |       |   +---Console
    |   |   |       |   |       Application.php
    |   |   |       |   |       Kernel.php
    |   |   |       |   |       
    |   |   |       |   +---Container
    |   |   |       |   |       BindingResolutionException.php
    |   |   |       |   |       Container.php
    |   |   |       |   |       ContextualBindingBuilder.php
    |   |   |       |   |       
    |   |   |       |   +---Cookie
    |   |   |       |   |       Factory.php
    |   |   |       |   |       QueueingFactory.php
    |   |   |       |   |       
    |   |   |       |   +---Database
    |   |   |       |   |       ModelIdentifier.php
    |   |   |       |   |       
    |   |   |       |   +---Debug
    |   |   |       |   |       ExceptionHandler.php
    |   |   |       |   |       
    |   |   |       |   +---Encryption
    |   |   |       |   |       DecryptException.php
    |   |   |       |   |       Encrypter.php
    |   |   |       |   |       EncryptException.php
    |   |   |       |   |       
    |   |   |       |   +---Events
    |   |   |       |   |       Dispatcher.php
    |   |   |       |   |       
    |   |   |       |   +---Filesystem
    |   |   |       |   |       Cloud.php
    |   |   |       |   |       Factory.php
    |   |   |       |   |       FileNotFoundException.php
    |   |   |       |   |       Filesystem.php
    |   |   |       |   |       
    |   |   |       |   +---Foundation
    |   |   |       |   |       Application.php
    |   |   |       |   |       
    |   |   |       |   +---Hashing
    |   |   |       |   |       Hasher.php
    |   |   |       |   |       
    |   |   |       |   +---Http
    |   |   |       |   |       Kernel.php
    |   |   |       |   |       
    |   |   |       |   +---Logging
    |   |   |       |   |       Log.php
    |   |   |       |   |       
    |   |   |       |   +---Mail
    |   |   |       |   |       Mailable.php
    |   |   |       |   |       Mailer.php
    |   |   |       |   |       MailQueue.php
    |   |   |       |   |       
    |   |   |       |   +---Notifications
    |   |   |       |   |       Dispatcher.php
    |   |   |       |   |       Factory.php
    |   |   |       |   |       
    |   |   |       |   +---Pagination
    |   |   |       |   |       LengthAwarePaginator.php
    |   |   |       |   |       Paginator.php
    |   |   |       |   |       
    |   |   |       |   +---Pipeline
    |   |   |       |   |       Hub.php
    |   |   |       |   |       Pipeline.php
    |   |   |       |   |       
    |   |   |       |   +---Queue
    |   |   |       |   |       EntityNotFoundException.php
    |   |   |       |   |       EntityResolver.php
    |   |   |       |   |       Factory.php
    |   |   |       |   |       Job.php
    |   |   |       |   |       Monitor.php
    |   |   |       |   |       Queue.php
    |   |   |       |   |       QueueableCollection.php
    |   |   |       |   |       QueueableEntity.php
    |   |   |       |   |       ShouldQueue.php
    |   |   |       |   |       
    |   |   |       |   +---Redis
    |   |   |       |   |       Factory.php
    |   |   |       |   |       
    |   |   |       |   +---Routing
    |   |   |       |   |       BindingRegistrar.php
    |   |   |       |   |       Registrar.php
    |   |   |       |   |       ResponseFactory.php
    |   |   |       |   |       UrlGenerator.php
    |   |   |       |   |       UrlRoutable.php
    |   |   |       |   |       
    |   |   |       |   +---Session
    |   |   |       |   |       Session.php
    |   |   |       |   |       
    |   |   |       |   +---Support
    |   |   |       |   |       Arrayable.php
    |   |   |       |   |       Htmlable.php
    |   |   |       |   |       Jsonable.php
    |   |   |       |   |       MessageBag.php
    |   |   |       |   |       MessageProvider.php
    |   |   |       |   |       Renderable.php
    |   |   |       |   |       
    |   |   |       |   +---Translation
    |   |   |       |   |       Translator.php
    |   |   |       |   |       
    |   |   |       |   +---Validation
    |   |   |       |   |       Factory.php
    |   |   |       |   |       ValidatesWhenResolved.php
    |   |   |       |   |       Validator.php
    |   |   |       |   |       
    |   |   |       |   \---View
    |   |   |       |           Factory.php
    |   |   |       |           View.php
    |   |   |       |           
    |   |   |       +---Cookie
    |   |   |       |   |   composer.json
    |   |   |       |   |   CookieJar.php
    |   |   |       |   |   CookieServiceProvider.php
    |   |   |       |   |   
    |   |   |       |   \---Middleware
    |   |   |       |           AddQueuedCookiesToResponse.php
    |   |   |       |           EncryptCookies.php
    |   |   |       |           
    |   |   |       +---Database
    |   |   |       |   |   composer.json
    |   |   |       |   |   Connection.php
    |   |   |       |   |   ConnectionInterface.php
    |   |   |       |   |   ConnectionResolver.php
    |   |   |       |   |   ConnectionResolverInterface.php
    |   |   |       |   |   DatabaseManager.php
    |   |   |       |   |   DatabaseServiceProvider.php
    |   |   |       |   |   DetectsDeadlocks.php
    |   |   |       |   |   DetectsLostConnections.php
    |   |   |       |   |   Grammar.php
    |   |   |       |   |   MigrationServiceProvider.php
    |   |   |       |   |   MySqlConnection.php
    |   |   |       |   |   PostgresConnection.php
    |   |   |       |   |   QueryException.php
    |   |   |       |   |   README.md
    |   |   |       |   |   Seeder.php
    |   |   |       |   |   SQLiteConnection.php
    |   |   |       |   |   SqlServerConnection.php
    |   |   |       |   |   
    |   |   |       |   +---Capsule
    |   |   |       |   |       Manager.php
    |   |   |       |   |       
    |   |   |       |   +---Concerns
    |   |   |       |   |       BuildsQueries.php
    |   |   |       |   |       ManagesTransactions.php
    |   |   |       |   |       
    |   |   |       |   +---Connectors
    |   |   |       |   |       ConnectionFactory.php
    |   |   |       |   |       Connector.php
    |   |   |       |   |       ConnectorInterface.php
    |   |   |       |   |       MySqlConnector.php
    |   |   |       |   |       PostgresConnector.php
    |   |   |       |   |       SQLiteConnector.php
    |   |   |       |   |       SqlServerConnector.php
    |   |   |       |   |       
    |   |   |       |   +---Console
    |   |   |       |   |   +---Migrations
    |   |   |       |   |   |       BaseCommand.php
    |   |   |       |   |   |       InstallCommand.php
    |   |   |       |   |   |       MigrateCommand.php
    |   |   |       |   |   |       MigrateMakeCommand.php
    |   |   |       |   |   |       RefreshCommand.php
    |   |   |       |   |   |       ResetCommand.php
    |   |   |       |   |   |       RollbackCommand.php
    |   |   |       |   |   |       StatusCommand.php
    |   |   |       |   |   |       
    |   |   |       |   |   \---Seeds
    |   |   |       |   |       |   SeedCommand.php
    |   |   |       |   |       |   SeederMakeCommand.php
    |   |   |       |   |       |   
    |   |   |       |   |       \---stubs
    |   |   |       |   |               seeder.stub
    |   |   |       |   |               
    |   |   |       |   +---Eloquent
    |   |   |       |   |   |   Builder.php
    |   |   |       |   |   |   Collection.php
    |   |   |       |   |   |   Factory.php
    |   |   |       |   |   |   FactoryBuilder.php
    |   |   |       |   |   |   JsonEncodingException.php
    |   |   |       |   |   |   MassAssignmentException.php
    |   |   |       |   |   |   Model.php
    |   |   |       |   |   |   ModelNotFoundException.php
    |   |   |       |   |   |   QueueEntityResolver.php
    |   |   |       |   |   |   RelationNotFoundException.php
    |   |   |       |   |   |   Scope.php
    |   |   |       |   |   |   SoftDeletes.php
    |   |   |       |   |   |   SoftDeletingScope.php
    |   |   |       |   |   |   
    |   |   |       |   |   +---Concerns
    |   |   |       |   |   |       GuardsAttributes.php
    |   |   |       |   |   |       HasAttributes.php
    |   |   |       |   |   |       HasEvents.php
    |   |   |       |   |   |       HasGlobalScopes.php
    |   |   |       |   |   |       HasRelationships.php
    |   |   |       |   |   |       HasTimestamps.php
    |   |   |       |   |   |       HidesAttributes.php
    |   |   |       |   |   |       QueriesRelationships.php
    |   |   |       |   |   |       
    |   |   |       |   |   \---Relations
    |   |   |       |   |       |   BelongsTo.php
    |   |   |       |   |       |   BelongsToMany.php
    |   |   |       |   |       |   HasMany.php
    |   |   |       |   |       |   HasManyThrough.php
    |   |   |       |   |       |   HasOne.php
    |   |   |       |   |       |   HasOneOrMany.php
    |   |   |       |   |       |   MorphMany.php
    |   |   |       |   |       |   MorphOne.php
    |   |   |       |   |       |   MorphOneOrMany.php
    |   |   |       |   |       |   MorphPivot.php
    |   |   |       |   |       |   MorphTo.php
    |   |   |       |   |       |   MorphToMany.php
    |   |   |       |   |       |   Pivot.php
    |   |   |       |   |       |   Relation.php
    |   |   |       |   |       |   
    |   |   |       |   |       \---Concerns
    |   |   |       |   |               InteractsWithPivotTable.php
    |   |   |       |   |               
    |   |   |       |   +---Events
    |   |   |       |   |       ConnectionEvent.php
    |   |   |       |   |       QueryExecuted.php
    |   |   |       |   |       StatementPrepared.php
    |   |   |       |   |       TransactionBeginning.php
    |   |   |       |   |       TransactionCommitted.php
    |   |   |       |   |       TransactionRolledBack.php
    |   |   |       |   |       
    |   |   |       |   +---Migrations
    |   |   |       |   |   |   DatabaseMigrationRepository.php
    |   |   |       |   |   |   Migration.php
    |   |   |       |   |   |   MigrationCreator.php
    |   |   |       |   |   |   MigrationRepositoryInterface.php
    |   |   |       |   |   |   Migrator.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |           blank.stub
    |   |   |       |   |           create.stub
    |   |   |       |   |           update.stub
    |   |   |       |   |           
    |   |   |       |   +---Query
    |   |   |       |   |   |   Builder.php
    |   |   |       |   |   |   Expression.php
    |   |   |       |   |   |   JoinClause.php
    |   |   |       |   |   |   JsonExpression.php
    |   |   |       |   |   |   
    |   |   |       |   |   +---Grammars
    |   |   |       |   |   |       Grammar.php
    |   |   |       |   |   |       MySqlGrammar.php
    |   |   |       |   |   |       PostgresGrammar.php
    |   |   |       |   |   |       SQLiteGrammar.php
    |   |   |       |   |   |       SqlServerGrammar.php
    |   |   |       |   |   |       
    |   |   |       |   |   \---Processors
    |   |   |       |   |           MySqlProcessor.php
    |   |   |       |   |           PostgresProcessor.php
    |   |   |       |   |           Processor.php
    |   |   |       |   |           SQLiteProcessor.php
    |   |   |       |   |           SqlServerProcessor.php
    |   |   |       |   |           
    |   |   |       |   \---Schema
    |   |   |       |       |   Blueprint.php
    |   |   |       |       |   Builder.php
    |   |   |       |       |   MySqlBuilder.php
    |   |   |       |       |   PostgresBuilder.php
    |   |   |       |       |   
    |   |   |       |       \---Grammars
    |   |   |       |               ChangeColumn.php
    |   |   |       |               Grammar.php
    |   |   |       |               MySqlGrammar.php
    |   |   |       |               PostgresGrammar.php
    |   |   |       |               RenameColumn.php
    |   |   |       |               SQLiteGrammar.php
    |   |   |       |               SqlServerGrammar.php
    |   |   |       |               
    |   |   |       +---Encryption
    |   |   |       |       composer.json
    |   |   |       |       Encrypter.php
    |   |   |       |       EncryptionServiceProvider.php
    |   |   |       |       
    |   |   |       +---Events
    |   |   |       |       CallQueuedHandler.php
    |   |   |       |       CallQueuedListener.php
    |   |   |       |       composer.json
    |   |   |       |       Dispatcher.php
    |   |   |       |       EventServiceProvider.php
    |   |   |       |       
    |   |   |       +---Filesystem
    |   |   |       |       composer.json
    |   |   |       |       Filesystem.php
    |   |   |       |       FilesystemAdapter.php
    |   |   |       |       FilesystemManager.php
    |   |   |       |       FilesystemServiceProvider.php
    |   |   |       |       
    |   |   |       +---Foundation
    |   |   |       |   |   AliasLoader.php
    |   |   |       |   |   Application.php
    |   |   |       |   |   ComposerScripts.php
    |   |   |       |   |   EnvironmentDetector.php
    |   |   |       |   |   helpers.php
    |   |   |       |   |   Inspiring.php
    |   |   |       |   |   ProviderRepository.php
    |   |   |       |   |   
    |   |   |       |   +---Auth
    |   |   |       |   |   |   AuthenticatesUsers.php
    |   |   |       |   |   |   RedirectsUsers.php
    |   |   |       |   |   |   RegistersUsers.php
    |   |   |       |   |   |   ResetsPasswords.php
    |   |   |       |   |   |   SendsPasswordResetEmails.php
    |   |   |       |   |   |   ThrottlesLogins.php
    |   |   |       |   |   |   User.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---Access
    |   |   |       |   |           Authorizable.php
    |   |   |       |   |           AuthorizesRequests.php
    |   |   |       |   |           
    |   |   |       |   +---Bootstrap
    |   |   |       |   |       BootProviders.php
    |   |   |       |   |       HandleExceptions.php
    |   |   |       |   |       LoadConfiguration.php
    |   |   |       |   |       LoadEnvironmentVariables.php
    |   |   |       |   |       RegisterFacades.php
    |   |   |       |   |       RegisterProviders.php
    |   |   |       |   |       SetRequestForConsole.php
    |   |   |       |   |       
    |   |   |       |   +---Bus
    |   |   |       |   |       Dispatchable.php
    |   |   |       |   |       DispatchesJobs.php
    |   |   |       |   |       PendingDispatch.php
    |   |   |       |   |       
    |   |   |       |   +---Console
    |   |   |       |   |   |   AppNameCommand.php
    |   |   |       |   |   |   ClearCompiledCommand.php
    |   |   |       |   |   |   ClosureCommand.php
    |   |   |       |   |   |   ConfigCacheCommand.php
    |   |   |       |   |   |   ConfigClearCommand.php
    |   |   |       |   |   |   ConsoleMakeCommand.php
    |   |   |       |   |   |   DownCommand.php
    |   |   |       |   |   |   EnvironmentCommand.php
    |   |   |       |   |   |   EventGenerateCommand.php
    |   |   |       |   |   |   EventMakeCommand.php
    |   |   |       |   |   |   JobMakeCommand.php
    |   |   |       |   |   |   Kernel.php
    |   |   |       |   |   |   KeyGenerateCommand.php
    |   |   |       |   |   |   ListenerMakeCommand.php
    |   |   |       |   |   |   MailMakeCommand.php
    |   |   |       |   |   |   ModelMakeCommand.php
    |   |   |       |   |   |   NotificationMakeCommand.php
    |   |   |       |   |   |   OptimizeCommand.php
    |   |   |       |   |   |   PolicyMakeCommand.php
    |   |   |       |   |   |   ProviderMakeCommand.php
    |   |   |       |   |   |   QueuedCommand.php
    |   |   |       |   |   |   RequestMakeCommand.php
    |   |   |       |   |   |   RouteCacheCommand.php
    |   |   |       |   |   |   RouteClearCommand.php
    |   |   |       |   |   |   RouteListCommand.php
    |   |   |       |   |   |   ServeCommand.php
    |   |   |       |   |   |   StorageLinkCommand.php
    |   |   |       |   |   |   TestMakeCommand.php
    |   |   |       |   |   |   UpCommand.php
    |   |   |       |   |   |   VendorPublishCommand.php
    |   |   |       |   |   |   ViewClearCommand.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |           console.stub
    |   |   |       |   |           event-handler-queued.stub
    |   |   |       |   |           event-handler.stub
    |   |   |       |   |           event.stub
    |   |   |       |   |           job-queued.stub
    |   |   |       |   |           job.stub
    |   |   |       |   |           listener-queued.stub
    |   |   |       |   |           listener.stub
    |   |   |       |   |           mail.stub
    |   |   |       |   |           markdown-mail.stub
    |   |   |       |   |           markdown-notification.stub
    |   |   |       |   |           markdown.stub
    |   |   |       |   |           model.stub
    |   |   |       |   |           notification.stub
    |   |   |       |   |           policy.plain.stub
    |   |   |       |   |           policy.stub
    |   |   |       |   |           provider.stub
    |   |   |       |   |           request.stub
    |   |   |       |   |           routes.stub
    |   |   |       |   |           test.stub
    |   |   |       |   |           unit-test.stub
    |   |   |       |   |           
    |   |   |       |   +---Events
    |   |   |       |   |       Dispatchable.php
    |   |   |       |   |       LocaleUpdated.php
    |   |   |       |   |       
    |   |   |       |   +---Exceptions
    |   |   |       |   |   |   Handler.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---views
    |   |   |       |   |           503.blade.php
    |   |   |       |   |           
    |   |   |       |   +---Http
    |   |   |       |   |   |   FormRequest.php
    |   |   |       |   |   |   Kernel.php
    |   |   |       |   |   |   
    |   |   |       |   |   +---Events
    |   |   |       |   |   |       RequestHandled.php
    |   |   |       |   |   |       
    |   |   |       |   |   +---Exceptions
    |   |   |       |   |   |       MaintenanceModeException.php
    |   |   |       |   |   |       
    |   |   |       |   |   \---Middleware
    |   |   |       |   |           CheckForMaintenanceMode.php
    |   |   |       |   |           ConvertEmptyStringsToNull.php
    |   |   |       |   |           TransformsRequest.php
    |   |   |       |   |           TrimStrings.php
    |   |   |       |   |           ValidatePostSize.php
    |   |   |       |   |           VerifyCsrfToken.php
    |   |   |       |   |           
    |   |   |       |   +---Providers
    |   |   |       |   |       ArtisanServiceProvider.php
    |   |   |       |   |       ComposerServiceProvider.php
    |   |   |       |   |       ConsoleSupportServiceProvider.php
    |   |   |       |   |       FormRequestServiceProvider.php
    |   |   |       |   |       FoundationServiceProvider.php
    |   |   |       |   |       
    |   |   |       |   +---stubs
    |   |   |       |   |       facade.stub
    |   |   |       |   |       
    |   |   |       |   +---Support
    |   |   |       |   |   \---Providers
    |   |   |       |   |           AuthServiceProvider.php
    |   |   |       |   |           EventServiceProvider.php
    |   |   |       |   |           RouteServiceProvider.php
    |   |   |       |   |           
    |   |   |       |   +---Testing
    |   |   |       |   |   |   DatabaseMigrations.php
    |   |   |       |   |   |   DatabaseTransactions.php
    |   |   |       |   |   |   HttpException.php
    |   |   |       |   |   |   TestCase.php
    |   |   |       |   |   |   TestResponse.php
    |   |   |       |   |   |   WithoutEvents.php
    |   |   |       |   |   |   WithoutMiddleware.php
    |   |   |       |   |   |   
    |   |   |       |   |   +---Concerns
    |   |   |       |   |   |       InteractsWithAuthentication.php
    |   |   |       |   |   |       InteractsWithConsole.php
    |   |   |       |   |   |       InteractsWithContainer.php
    |   |   |       |   |   |       InteractsWithDatabase.php
    |   |   |       |   |   |       InteractsWithSession.php
    |   |   |       |   |   |       MakesHttpRequests.php
    |   |   |       |   |   |       MocksApplicationServices.php
    |   |   |       |   |   |       
    |   |   |       |   |   \---Constraints
    |   |   |       |   |           HasInDatabase.php
    |   |   |       |   |           SoftDeletedInDatabase.php
    |   |   |       |   |           
    |   |   |       |   \---Validation
    |   |   |       |           ValidatesRequests.php
    |   |   |       |           
    |   |   |       +---Hashing
    |   |   |       |       BcryptHasher.php
    |   |   |       |       composer.json
    |   |   |       |       HashServiceProvider.php
    |   |   |       |       
    |   |   |       +---Http
    |   |   |       |   |   composer.json
    |   |   |       |   |   File.php
    |   |   |       |   |   FileHelpers.php
    |   |   |       |   |   JsonResponse.php
    |   |   |       |   |   RedirectResponse.php
    |   |   |       |   |   Request.php
    |   |   |       |   |   Response.php
    |   |   |       |   |   ResponseTrait.php
    |   |   |       |   |   UploadedFile.php
    |   |   |       |   |   
    |   |   |       |   +---Concerns
    |   |   |       |   |       InteractsWithContentTypes.php
    |   |   |       |   |       InteractsWithFlashData.php
    |   |   |       |   |       InteractsWithInput.php
    |   |   |       |   |       
    |   |   |       |   +---Exceptions
    |   |   |       |   |       HttpResponseException.php
    |   |   |       |   |       PostTooLargeException.php
    |   |   |       |   |       
    |   |   |       |   +---Middleware
    |   |   |       |   |       CheckResponseForModifications.php
    |   |   |       |   |       FrameGuard.php
    |   |   |       |   |       
    |   |   |       |   \---Testing
    |   |   |       |           File.php
    |   |   |       |           FileFactory.php
    |   |   |       |           MimeType.php
    |   |   |       |           
    |   |   |       +---Log
    |   |   |       |   |   composer.json
    |   |   |       |   |   LogServiceProvider.php
    |   |   |       |   |   Writer.php
    |   |   |       |   |   
    |   |   |       |   \---Events
    |   |   |       |           MessageLogged.php
    |   |   |       |           
    |   |   |       +---Mail
    |   |   |       |   |   composer.json
    |   |   |       |   |   Mailable.php
    |   |   |       |   |   Mailer.php
    |   |   |       |   |   MailServiceProvider.php
    |   |   |       |   |   Markdown.php
    |   |   |       |   |   Message.php
    |   |   |       |   |   PendingMail.php
    |   |   |       |   |   SendQueuedMailable.php
    |   |   |       |   |   TransportManager.php
    |   |   |       |   |   
    |   |   |       |   +---Events
    |   |   |       |   |       MessageSending.php
    |   |   |       |   |       MessageSent.php
    |   |   |       |   |       
    |   |   |       |   +---resources
    |   |   |       |   |   \---views
    |   |   |       |   |       +---html
    |   |   |       |   |       |   |   button.blade.php
    |   |   |       |   |       |   |   footer.blade.php
    |   |   |       |   |       |   |   header.blade.php
    |   |   |       |   |       |   |   layout.blade.php
    |   |   |       |   |       |   |   message.blade.php
    |   |   |       |   |       |   |   panel.blade.php
    |   |   |       |   |       |   |   promotion.blade.php
    |   |   |       |   |       |   |   subcopy.blade.php
    |   |   |       |   |       |   |   table.blade.php
    |   |   |       |   |       |   |   
    |   |   |       |   |       |   +---promotion
    |   |   |       |   |       |   |       button.blade.php
    |   |   |       |   |       |   |       
    |   |   |       |   |       |   \---themes
    |   |   |       |   |       |           default.css
    |   |   |       |   |       |           
    |   |   |       |   |       \---markdown
    |   |   |       |   |           |   button.blade.php
    |   |   |       |   |           |   footer.blade.php
    |   |   |       |   |           |   header.blade.php
    |   |   |       |   |           |   layout.blade.php
    |   |   |       |   |           |   message.blade.php
    |   |   |       |   |           |   panel.blade.php
    |   |   |       |   |           |   promotion.blade.php
    |   |   |       |   |           |   subcopy.blade.php
    |   |   |       |   |           |   table.blade.php
    |   |   |       |   |           |   
    |   |   |       |   |           \---promotion
    |   |   |       |   |                   button.blade.php
    |   |   |       |   |                   
    |   |   |       |   \---Transport
    |   |   |       |           ArrayTransport.php
    |   |   |       |           LogTransport.php
    |   |   |       |           MailgunTransport.php
    |   |   |       |           MandrillTransport.php
    |   |   |       |           SesTransport.php
    |   |   |       |           SparkPostTransport.php
    |   |   |       |           Transport.php
    |   |   |       |           
    |   |   |       +---Notifications
    |   |   |       |   |   Action.php
    |   |   |       |   |   ChannelManager.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   DatabaseNotification.php
    |   |   |       |   |   DatabaseNotificationCollection.php
    |   |   |       |   |   HasDatabaseNotifications.php
    |   |   |       |   |   Notifiable.php
    |   |   |       |   |   Notification.php
    |   |   |       |   |   NotificationSender.php
    |   |   |       |   |   NotificationServiceProvider.php
    |   |   |       |   |   RoutesNotifications.php
    |   |   |       |   |   SendQueuedNotifications.php
    |   |   |       |   |   
    |   |   |       |   +---Channels
    |   |   |       |   |       BroadcastChannel.php
    |   |   |       |   |       DatabaseChannel.php
    |   |   |       |   |       MailChannel.php
    |   |   |       |   |       NexmoSmsChannel.php
    |   |   |       |   |       SlackWebhookChannel.php
    |   |   |       |   |       
    |   |   |       |   +---Console
    |   |   |       |   |   |   NotificationTableCommand.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |           notifications.stub
    |   |   |       |   |           
    |   |   |       |   +---Events
    |   |   |       |   |       BroadcastNotificationCreated.php
    |   |   |       |   |       NotificationFailed.php
    |   |   |       |   |       NotificationSending.php
    |   |   |       |   |       NotificationSent.php
    |   |   |       |   |       
    |   |   |       |   +---Messages
    |   |   |       |   |       BroadcastMessage.php
    |   |   |       |   |       DatabaseMessage.php
    |   |   |       |   |       MailMessage.php
    |   |   |       |   |       NexmoMessage.php
    |   |   |       |   |       SimpleMessage.php
    |   |   |       |   |       SlackAttachment.php
    |   |   |       |   |       SlackAttachmentField.php
    |   |   |       |   |       SlackMessage.php
    |   |   |       |   |       
    |   |   |       |   \---resources
    |   |   |       |       \---views
    |   |   |       |               email.blade.php
    |   |   |       |               
    |   |   |       +---Pagination
    |   |   |       |   |   AbstractPaginator.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   LengthAwarePaginator.php
    |   |   |       |   |   PaginationServiceProvider.php
    |   |   |       |   |   Paginator.php
    |   |   |       |   |   UrlWindow.php
    |   |   |       |   |   
    |   |   |       |   \---resources
    |   |   |       |       \---views
    |   |   |       |               bootstrap-4.blade.php
    |   |   |       |               default.blade.php
    |   |   |       |               simple-bootstrap-4.blade.php
    |   |   |       |               simple-default.blade.php
    |   |   |       |               
    |   |   |       +---Pipeline
    |   |   |       |       composer.json
    |   |   |       |       Hub.php
    |   |   |       |       Pipeline.php
    |   |   |       |       PipelineServiceProvider.php
    |   |   |       |       
    |   |   |       +---Queue
    |   |   |       |   |   BeanstalkdQueue.php
    |   |   |       |   |   CallQueuedHandler.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   DatabaseQueue.php
    |   |   |       |   |   FailingJob.php
    |   |   |       |   |   InteractsWithQueue.php
    |   |   |       |   |   InteractsWithTime.php
    |   |   |       |   |   InvalidPayloadException.php
    |   |   |       |   |   Listener.php
    |   |   |       |   |   ListenerOptions.php
    |   |   |       |   |   LuaScripts.php
    |   |   |       |   |   ManuallyFailedException.php
    |   |   |       |   |   MaxAttemptsExceededException.php
    |   |   |       |   |   NullQueue.php
    |   |   |       |   |   Queue.php
    |   |   |       |   |   QueueManager.php
    |   |   |       |   |   QueueServiceProvider.php
    |   |   |       |   |   README.md
    |   |   |       |   |   RedisQueue.php
    |   |   |       |   |   SerializesAndRestoresModelIdentifiers.php
    |   |   |       |   |   SerializesModels.php
    |   |   |       |   |   SqsQueue.php
    |   |   |       |   |   SyncQueue.php
    |   |   |       |   |   Worker.php
    |   |   |       |   |   WorkerOptions.php
    |   |   |       |   |   
    |   |   |       |   +---Capsule
    |   |   |       |   |       Manager.php
    |   |   |       |   |       
    |   |   |       |   +---Connectors
    |   |   |       |   |       BeanstalkdConnector.php
    |   |   |       |   |       ConnectorInterface.php
    |   |   |       |   |       DatabaseConnector.php
    |   |   |       |   |       NullConnector.php
    |   |   |       |   |       RedisConnector.php
    |   |   |       |   |       SqsConnector.php
    |   |   |       |   |       SyncConnector.php
    |   |   |       |   |       
    |   |   |       |   +---Console
    |   |   |       |   |   |   FailedTableCommand.php
    |   |   |       |   |   |   FlushFailedCommand.php
    |   |   |       |   |   |   ForgetFailedCommand.php
    |   |   |       |   |   |   ListenCommand.php
    |   |   |       |   |   |   ListFailedCommand.php
    |   |   |       |   |   |   RestartCommand.php
    |   |   |       |   |   |   RetryCommand.php
    |   |   |       |   |   |   TableCommand.php
    |   |   |       |   |   |   WorkCommand.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |           failed_jobs.stub
    |   |   |       |   |           jobs.stub
    |   |   |       |   |           
    |   |   |       |   +---Events
    |   |   |       |   |       JobExceptionOccurred.php
    |   |   |       |   |       JobFailed.php
    |   |   |       |   |       JobProcessed.php
    |   |   |       |   |       JobProcessing.php
    |   |   |       |   |       Looping.php
    |   |   |       |   |       WorkerStopping.php
    |   |   |       |   |       
    |   |   |       |   +---Failed
    |   |   |       |   |       DatabaseFailedJobProvider.php
    |   |   |       |   |       FailedJobProviderInterface.php
    |   |   |       |   |       NullFailedJobProvider.php
    |   |   |       |   |       
    |   |   |       |   \---Jobs
    |   |   |       |           BeanstalkdJob.php
    |   |   |       |           DatabaseJob.php
    |   |   |       |           DatabaseJobRecord.php
    |   |   |       |           Job.php
    |   |   |       |           JobName.php
    |   |   |       |           RedisJob.php
    |   |   |       |           SqsJob.php
    |   |   |       |           SyncJob.php
    |   |   |       |           
    |   |   |       +---Redis
    |   |   |       |   |   composer.json
    |   |   |       |   |   RedisManager.php
    |   |   |       |   |   RedisServiceProvider.php
    |   |   |       |   |   
    |   |   |       |   +---Connections
    |   |   |       |   |       Connection.php
    |   |   |       |   |       PhpRedisClusterConnection.php
    |   |   |       |   |       PhpRedisConnection.php
    |   |   |       |   |       PredisClusterConnection.php
    |   |   |       |   |       PredisConnection.php
    |   |   |       |   |       
    |   |   |       |   \---Connectors
    |   |   |       |           PhpRedisConnector.php
    |   |   |       |           PredisConnector.php
    |   |   |       |           
    |   |   |       +---Routing
    |   |   |       |   |   composer.json
    |   |   |       |   |   Controller.php
    |   |   |       |   |   ControllerDispatcher.php
    |   |   |       |   |   ControllerMiddlewareOptions.php
    |   |   |       |   |   ImplicitRouteBinding.php
    |   |   |       |   |   MiddlewareNameResolver.php
    |   |   |       |   |   Pipeline.php
    |   |   |       |   |   Redirector.php
    |   |   |       |   |   ResourceRegistrar.php
    |   |   |       |   |   ResponseFactory.php
    |   |   |       |   |   Route.php
    |   |   |       |   |   RouteAction.php
    |   |   |       |   |   RouteBinding.php
    |   |   |       |   |   RouteCollection.php
    |   |   |       |   |   RouteCompiler.php
    |   |   |       |   |   RouteDependencyResolverTrait.php
    |   |   |       |   |   RouteGroup.php
    |   |   |       |   |   RouteParameterBinder.php
    |   |   |       |   |   Router.php
    |   |   |       |   |   RouteRegistrar.php
    |   |   |       |   |   RouteSignatureParameters.php
    |   |   |       |   |   RouteUrlGenerator.php
    |   |   |       |   |   RoutingServiceProvider.php
    |   |   |       |   |   SortedMiddleware.php
    |   |   |       |   |   UrlGenerator.php
    |   |   |       |   |   
    |   |   |       |   +---Console
    |   |   |       |   |   |   ControllerMakeCommand.php
    |   |   |       |   |   |   MiddlewareMakeCommand.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |           controller.model.stub
    |   |   |       |   |           controller.nested.stub
    |   |   |       |   |           controller.plain.stub
    |   |   |       |   |           controller.stub
    |   |   |       |   |           middleware.stub
    |   |   |       |   |           
    |   |   |       |   +---Events
    |   |   |       |   |       RouteMatched.php
    |   |   |       |   |       
    |   |   |       |   +---Exceptions
    |   |   |       |   |       UrlGenerationException.php
    |   |   |       |   |       
    |   |   |       |   +---Matching
    |   |   |       |   |       HostValidator.php
    |   |   |       |   |       MethodValidator.php
    |   |   |       |   |       SchemeValidator.php
    |   |   |       |   |       UriValidator.php
    |   |   |       |   |       ValidatorInterface.php
    |   |   |       |   |       
    |   |   |       |   \---Middleware
    |   |   |       |           SubstituteBindings.php
    |   |   |       |           ThrottleRequests.php
    |   |   |       |           
    |   |   |       +---Session
    |   |   |       |   |   CacheBasedSessionHandler.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   CookieSessionHandler.php
    |   |   |       |   |   DatabaseSessionHandler.php
    |   |   |       |   |   EncryptedStore.php
    |   |   |       |   |   ExistenceAwareInterface.php
    |   |   |       |   |   FileSessionHandler.php
    |   |   |       |   |   SessionManager.php
    |   |   |       |   |   SessionServiceProvider.php
    |   |   |       |   |   Store.php
    |   |   |       |   |   TokenMismatchException.php
    |   |   |       |   |   
    |   |   |       |   +---Console
    |   |   |       |   |   |   SessionTableCommand.php
    |   |   |       |   |   |   
    |   |   |       |   |   \---stubs
    |   |   |       |   |           database.stub
    |   |   |       |   |           
    |   |   |       |   \---Middleware
    |   |   |       |           AuthenticateSession.php
    |   |   |       |           StartSession.php
    |   |   |       |           
    |   |   |       +---Support
    |   |   |       |   |   AggregateServiceProvider.php
    |   |   |       |   |   Arr.php
    |   |   |       |   |   Collection.php
    |   |   |       |   |   composer.json
    |   |   |       |   |   Composer.php
    |   |   |       |   |   Fluent.php
    |   |   |       |   |   helpers.php
    |   |   |       |   |   HigherOrderCollectionProxy.php
    |   |   |       |   |   HigherOrderTapProxy.php
    |   |   |       |   |   HtmlString.php
    |   |   |       |   |   Manager.php
    |   |   |       |   |   MessageBag.php
    |   |   |       |   |   NamespacedItemResolver.php
    |   |   |       |   |   Pluralizer.php
    |   |   |       |   |   ServiceProvider.php
    |   |   |       |   |   Str.php
    |   |   |       |   |   ViewErrorBag.php
    |   |   |       |   |   
    |   |   |       |   +---Debug
    |   |   |       |   |       Dumper.php
    |   |   |       |   |       HtmlDumper.php
    |   |   |       |   |       
    |   |   |       |   +---Facades
    |   |   |       |   |       App.php
    |   |   |       |   |       Artisan.php
    |   |   |       |   |       Auth.php
    |   |   |       |   |       Blade.php
    |   |   |       |   |       Broadcast.php
    |   |   |       |   |       Bus.php
    |   |   |       |   |       Cache.php
    |   |   |       |   |       Config.php
    |   |   |       |   |       Cookie.php
    |   |   |       |   |       Crypt.php
    |   |   |       |   |       DB.php
    |   |   |       |   |       Event.php
    |   |   |       |   |       Facade.php
    |   |   |       |   |       File.php
    |   |   |       |   |       Gate.php
    |   |   |       |   |       Hash.php
    |   |   |       |   |       Input.php
    |   |   |       |   |       Lang.php
    |   |   |       |   |       Log.php
    |   |   |       |   |       Mail.php
    |   |   |       |   |       Notification.php
    |   |   |       |   |       Password.php
    |   |   |       |   |       Queue.php
    |   |   |       |   |       Redirect.php
    |   |   |       |   |       Redis.php
    |   |   |       |   |       Request.php
    |   |   |       |   |       Response.php
    |   |   |       |   |       Route.php
    |   |   |       |   |       Schema.php
    |   |   |       |   |       Session.php
    |   |   |       |   |       Storage.php
    |   |   |       |   |       URL.php
    |   |   |       |   |       Validator.php
    |   |   |       |   |       View.php
    |   |   |       |   |       
    |   |   |       |   +---Testing
    |   |   |       |   |   \---Fakes
    |   |   |       |   |           BusFake.php
    |   |   |       |   |           EventFake.php
    |   |   |       |   |           MailFake.php
    |   |   |       |   |           NotificationFake.php
    |   |   |       |   |           PendingMailFake.php
    |   |   |       |   |           QueueFake.php
    |   |   |       |   |           
    |   |   |       |   \---Traits
    |   |   |       |           CapsuleManagerTrait.php
    |   |   |       |           Macroable.php
    |   |   |       |           
    |   |   |       +---Translation
    |   |   |       |       ArrayLoader.php
    |   |   |       |       composer.json
    |   |   |       |       FileLoader.php
    |   |   |       |       LoaderInterface.php
    |   |   |       |       MessageSelector.php
    |   |   |       |       TranslationServiceProvider.php
    |   |   |       |       Translator.php
    |   |   |       |       
    |   |   |       +---Validation
    |   |   |       |   |   composer.json
    |   |   |       |   |   DatabasePresenceVerifier.php
    |   |   |       |   |   Factory.php
    |   |   |       |   |   PresenceVerifierInterface.php
    |   |   |       |   |   Rule.php
    |   |   |       |   |   UnauthorizedException.php
    |   |   |       |   |   ValidatesWhenResolvedTrait.php
    |   |   |       |   |   ValidationData.php
    |   |   |       |   |   ValidationException.php
    |   |   |       |   |   ValidationRuleParser.php
    |   |   |       |   |   ValidationServiceProvider.php
    |   |   |       |   |   Validator.php
    |   |   |       |   |   
    |   |   |       |   +---Concerns
    |   |   |       |   |       FormatsMessages.php
    |   |   |       |   |       ReplacesAttributes.php
    |   |   |       |   |       ValidatesAttributes.php
    |   |   |       |   |       
    |   |   |       |   \---Rules
    |   |   |       |           Dimensions.php
    |   |   |       |           Exists.php
    |   |   |       |           In.php
    |   |   |       |           NotIn.php
    |   |   |       |           Unique.php
    |   |   |       |           
    |   |   |       \---View
    |   |   |           |   composer.json
    |   |   |           |   Factory.php
    |   |   |           |   FileViewFinder.php
    |   |   |           |   View.php
    |   |   |           |   ViewFinderInterface.php
    |   |   |           |   ViewName.php
    |   |   |           |   ViewServiceProvider.php
    |   |   |           |   
    |   |   |           +---Compilers
    |   |   |           |   |   BladeCompiler.php
    |   |   |           |   |   Compiler.php
    |   |   |           |   |   CompilerInterface.php
    |   |   |           |   |   
    |   |   |           |   \---Concerns
    |   |   |           |           CompilesAuthorizations.php
    |   |   |           |           CompilesComments.php
    |   |   |           |           CompilesComponents.php
    |   |   |           |           CompilesConditionals.php
    |   |   |           |           CompilesEchos.php
    |   |   |           |           CompilesIncludes.php
    |   |   |           |           CompilesInjections.php
    |   |   |           |           CompilesLayouts.php
    |   |   |           |           CompilesLoops.php
    |   |   |           |           CompilesRawPhp.php
    |   |   |           |           CompilesStacks.php
    |   |   |           |           CompilesTranslations.php
    |   |   |           |           
    |   |   |           +---Concerns
    |   |   |           |       ManagesComponents.php
    |   |   |           |       ManagesEvents.php
    |   |   |           |       ManagesLayouts.php
    |   |   |           |       ManagesLoops.php
    |   |   |           |       ManagesStacks.php
    |   |   |           |       ManagesTranslations.php
    |   |   |           |       
    |   |   |           +---Engines
    |   |   |           |       CompilerEngine.php
    |   |   |           |       Engine.php
    |   |   |           |       EngineInterface.php
    |   |   |           |       EngineResolver.php
    |   |   |           |       FileEngine.php
    |   |   |           |       PhpEngine.php
    |   |   |           |       
    |   |   |           \---Middleware
    |   |   |                   ShareErrorsFromSession.php
    |   |   |                   
    |   |   \---tests
    |   |       |   bootstrap.php
    |   |       |   
    |   |       +---Auth
    |   |       |       AuthAccessGateTest.php
    |   |       |       AuthDatabaseTokenRepositoryTest.php
    |   |       |       AuthDatabaseUserProviderTest.php
    |   |       |       AuthEloquentUserProviderTest.php
    |   |       |       AuthenticateMiddlewareTest.php
    |   |       |       AuthGuardTest.php
    |   |       |       AuthorizeMiddlewareTest.php
    |   |       |       AuthorizesResourcesTest.php
    |   |       |       AuthPasswordBrokerTest.php
    |   |       |       AuthTokenGuardTest.php
    |   |       |       
    |   |       +---Broadcasting
    |   |       |       BroadcasterTest.php
    |   |       |       BroadcastEventTest.php
    |   |       |       
    |   |       +---Bus
    |   |       |       BusDispatcherTest.php
    |   |       |       
    |   |       +---Cache
    |   |       |       CacheApcStoreTest.php
    |   |       |       CacheArrayStoreTest.php
    |   |       |       CacheDatabaseStoreTest.php
    |   |       |       CacheEventsTest.php
    |   |       |       CacheFileStoreTest.php
    |   |       |       CacheManagerTest.php
    |   |       |       CacheMemcachedConnectorTest.php
    |   |       |       CacheMemcachedStoreTest.php
    |   |       |       CacheNullStoreTest.php
    |   |       |       CacheRateLimiterTest.php
    |   |       |       CacheRedisStoreTest.php
    |   |       |       CacheRepositoryTest.php
    |   |       |       CacheTableCommandTest.php
    |   |       |       CacheTaggedCacheTest.php
    |   |       |       ClearCommandTest.php
    |   |       |       RedisCacheIntegrationTest.php
    |   |       |       
    |   |       +---Config
    |   |       |       RepositoryTest.php
    |   |       |       
    |   |       +---Console
    |   |       |   |   ConsoleApplicationTest.php
    |   |       |   |   ConsoleEventSchedulerTest.php
    |   |       |   |   ConsoleParserTest.php
    |   |       |   |   ConsoleScheduledEventTest.php
    |   |       |   |   
    |   |       |   \---Scheduling
    |   |       |           CacheOverlappingStrategyTest.php
    |   |       |           EventTest.php
    |   |       |           FrequencyTest.php
    |   |       |           
    |   |       +---Container
    |   |       |       ContainerTest.php
    |   |       |       
    |   |       +---Cookie
    |   |       |   |   CookieTest.php
    |   |       |   |   
    |   |       |   \---Middleware
    |   |       |           EncryptCookiesTest.php
    |   |       |           
    |   |       +---Database
    |   |       |   |   DatabaseConnectionFactoryTest.php
    |   |       |   |   DatabaseConnectionTest.php
    |   |       |   |   DatabaseConnectorTest.php
    |   |       |   |   DatabaseEloquentBelongsToManyTest.php
    |   |       |   |   DatabaseEloquentBelongsToTest.php
    |   |       |   |   DatabaseEloquentBuilderTest.php
    |   |       |   |   DatabaseEloquentCollectionTest.php
    |   |       |   |   DatabaseEloquentGlobalScopesTest.php
    |   |       |   |   DatabaseEloquentHasManyTest.php
    |   |       |   |   DatabaseEloquentHasManyThroughTest.php
    |   |       |   |   DatabaseEloquentHasOneTest.php
    |   |       |   |   DatabaseEloquentIntegrationTest.php
    |   |       |   |   DatabaseEloquentIntegrationWithTablePrefixTest.php
    |   |       |   |   DatabaseEloquentModelTest.php
    |   |       |   |   DatabaseEloquentMorphTest.php
    |   |       |   |   DatabaseEloquentMorphToManyTest.php
    |   |       |   |   DatabaseEloquentMorphToTest.php
    |   |       |   |   DatabaseEloquentPivotTest.php
    |   |       |   |   DatabaseEloquentPolymorphicIntegrationTest.php
    |   |       |   |   DatabaseEloquentPolymorphicRelationsIntegrationTest.php
    |   |       |   |   DatabaseEloquentRelationTest.php
    |   |       |   |   DatabaseEloquentSoftDeletesIntegrationTest.php
    |   |       |   |   DatabaseMigrationCreatorTest.php
    |   |       |   |   DatabaseMigrationInstallCommandTest.php
    |   |       |   |   DatabaseMigrationMakeCommandTest.php
    |   |       |   |   DatabaseMigrationMigrateCommandTest.php
    |   |       |   |   DatabaseMigrationRefreshCommandTest.php
    |   |       |   |   DatabaseMigrationRepositoryTest.php
    |   |       |   |   DatabaseMigrationResetCommandTest.php
    |   |       |   |   DatabaseMigrationRollbackCommandTest.php
    |   |       |   |   DatabaseMigratorIntegrationTest.php
    |   |       |   |   DatabaseMySqlProcessorTest.php
    |   |       |   |   DatabaseMySqlSchemaGrammarTest.php
    |   |       |   |   DatabasePostgresProcessorTest.php
    |   |       |   |   DatabasePostgresSchemaGrammarTest.php
    |   |       |   |   DatabaseProcessorTest.php
    |   |       |   |   DatabaseQueryBuilderTest.php
    |   |       |   |   DatabaseSchemaBlueprintIntegrationTest.php
    |   |       |   |   DatabaseSchemaBlueprintTest.php
    |   |       |   |   DatabaseSchemaBuilderTest.php
    |   |       |   |   DatabaseSeederTest.php
    |   |       |   |   DatabaseSoftDeletingScopeTest.php
    |   |       |   |   DatabaseSoftDeletingTraitTest.php
    |   |       |   |   DatabaseSQLiteProcessorTest.php
    |   |       |   |   DatabaseSQLiteSchemaGrammarTest.php
    |   |       |   |   DatabaseSqlServerSchemaGrammarTest.php
    |   |       |   |   SeedCommandTest.php
    |   |       |   |   
    |   |       |   +---migrations
    |   |       |   |   +---one
    |   |       |   |   |       2016_01_01_000000_create_users_table.php
    |   |       |   |   |       2016_01_01_100000_create_password_resets_table.php
    |   |       |   |   |       
    |   |       |   |   \---two
    |   |       |   |           2016_01_01_200000_create_flights_table.php
    |   |       |   |           
    |   |       |   \---stubs
    |   |       |           EloquentModelNamespacedStub.php
    |   |       |           MigrationCreatorFakeMigration.php
    |   |       |           
    |   |       +---Encryption
    |   |       |       EncrypterTest.php
    |   |       |       
    |   |       +---Events
    |   |       |       EventsDispatcherTest.php
    |   |       |       
    |   |       +---Filesystem
    |   |       |       FilesystemTest.php
    |   |       |       
    |   |       +---Foundation
    |   |       |   |   FoundationAliasLoaderTest.php
    |   |       |   |   FoundationApplicationTest.php
    |   |       |   |   FoundationAuthenticationTest.php
    |   |       |   |   FoundationAuthorizesRequestsTraitTest.php
    |   |       |   |   FoundationComposerTest.php
    |   |       |   |   FoundationEnvironmentDetectorTest.php
    |   |       |   |   FoundationFormRequestTest.php
    |   |       |   |   FoundationHelpersTest.php
    |   |       |   |   FoundationInteractsWithDatabaseTest.php
    |   |       |   |   FoundationProviderRepositoryTest.php
    |   |       |   |   FoundationTestResponseTest.php
    |   |       |   |   
    |   |       |   \---Http
    |   |       |       \---Middleware
    |   |       |               TransformsRequestTest.php
    |   |       |               
    |   |       +---Hashing
    |   |       |       BcryptHasherTest.php
    |   |       |       
    |   |       +---Http
    |   |       |       HttpJsonResponseTest.php
    |   |       |       HttpRedirectResponseTest.php
    |   |       |       HttpRequestTest.php
    |   |       |       HttpResponseTest.php
    |   |       |       
    |   |       +---Log
    |   |       |       LogWriterTest.php
    |   |       |       
    |   |       +---Mail
    |   |       |       MailMailableDataTest.php
    |   |       |       MailMailableTest.php
    |   |       |       MailMailerTest.php
    |   |       |       MailMarkdownTest.php
    |   |       |       MailMessageTest.php
    |   |       |       MailSesTransportTest.php
    |   |       |       
    |   |       +---Notifications
    |   |       |       NotificationActionTest.php
    |   |       |       NotificationBroadcastChannelTest.php
    |   |       |       NotificationChannelManagerTest.php
    |   |       |       NotificationDatabaseChannelTest.php
    |   |       |       NotificationMailChannelTest.php
    |   |       |       NotificationMessageTest.php
    |   |       |       NotificationNexmoChannelTest.php
    |   |       |       NotificationRoutesNotificationsTest.php
    |   |       |       NotificationSendQueuedNotificationTest.php
    |   |       |       NotificationSlackChannelTest.php
    |   |       |       
    |   |       +---Pagination
    |   |       |   |   LengthAwarePaginatorTest.php
    |   |       |   |   PaginatorTest.php
    |   |       |   |   UrlWindowTest.php
    |   |       |   |   
    |   |       |   \---fixtures
    |   |       |           beginning.html
    |   |       |           beginning_bs4.html
    |   |       |           ending.html
    |   |       |           ending_bs4.html
    |   |       |           first_page.html
    |   |       |           first_page_bs4.html
    |   |       |           last_page.html
    |   |       |           last_page_bs4.html
    |   |       |           slider.html
    |   |       |           slider_bs4.html
    |   |       |           
    |   |       +---Pipeline
    |   |       |       PipelineTest.php
    |   |       |       
    |   |       +---Queue
    |   |       |       QueueBeanstalkdJobTest.php
    |   |       |       QueueBeanstalkdQueueTest.php
    |   |       |       QueueDatabaseQueueIntegrationTest.php
    |   |       |       QueueDatabaseQueueUnitTest.php
    |   |       |       QueueListenerTest.php
    |   |       |       QueueManagerTest.php
    |   |       |       QueueRedisJobTest.php
    |   |       |       QueueRedisQueueTest.php
    |   |       |       QueueSqsJobTest.php
    |   |       |       QueueSqsQueueTest.php
    |   |       |       QueueSyncQueueTest.php
    |   |       |       QueueWorkerTest.php
    |   |       |       RedisQueueIntegrationTest.php
    |   |       |       
    |   |       +---Redis
    |   |       |   |   InteractsWithRedis.php
    |   |       |   |   
    |   |       |   \---Connections
    |   |       |           PhpRedisConnectionTest.php
    |   |       |           
    |   |       +---Routing
    |   |       |   |   RouteCollectionTest.php
    |   |       |   |   RouteRegistrarTest.php
    |   |       |   |   RoutingRedirectorTest.php
    |   |       |   |   RoutingRouteTest.php
    |   |       |   |   RoutingSortedMiddlewareTest.php
    |   |       |   |   RoutingUrlGeneratorTest.php
    |   |       |   |   
    |   |       |   \---fixtures
    |   |       |           controller.php
    |   |       |           except_controller.php
    |   |       |           only_controller.php
    |   |       |           routes.php
    |   |       |           
    |   |       +---Session
    |   |       |       EncryptedSessionStoreTest.php
    |   |       |       SessionStoreTest.php
    |   |       |       SessionTableCommandTest.php
    |   |       |       
    |   |       +---Support
    |   |       |       SupportArrTest.php
    |   |       |       SupportCapsuleManagerTraitTest.php
    |   |       |       SupportCollectionTest.php
    |   |       |       SupportFacadeTest.php
    |   |       |       SupportFluentTest.php
    |   |       |       SupportHelpersTest.php
    |   |       |       SupportHtmlStringTest.php
    |   |       |       SupportMacroableTest.php
    |   |       |       SupportMessageBagTest.php
    |   |       |       SupportNamespacedItemResolverTest.php
    |   |       |       SupportPluralizerTest.php
    |   |       |       SupportServiceProviderTest.php
    |   |       |       SupportStrTest.php
    |   |       |       
    |   |       +---Translation
    |   |       |       TranslationFileLoaderTest.php
    |   |       |       TranslationMessageSelectorTest.php
    |   |       |       TranslationTranslatorTest.php
    |   |       |       
    |   |       +---Validation
    |   |       |   |   ValidationDatabasePresenceVerifierTest.php
    |   |       |   |   ValidationDimensionsRuleTest.php
    |   |       |   |   ValidationExistsRuleTest.php
    |   |       |   |   ValidationFactoryTest.php
    |   |       |   |   ValidationInRuleTest.php
    |   |       |   |   ValidationNotInRuleTest.php
    |   |       |   |   ValidationRuleTest.php
    |   |       |   |   ValidationUniqueRuleTest.php
    |   |       |   |   ValidationValidatorTest.php
    |   |       |   |   
    |   |       |   \---fixtures
    |   |       |           empty.png
    |   |       |           image.png
    |   |       |           image2.png
    |   |       |           
    |   |       \---View
    |   |           |   ViewBladeCompilerTest.php
    |   |           |   ViewCompilerEngineTest.php
    |   |           |   ViewEngineResolverTest.php
    |   |           |   ViewFactoryTest.php
    |   |           |   ViewFileViewFinderTest.php
    |   |           |   ViewPhpEngineTest.php
    |   |           |   ViewTest.php
    |   |           |   
    |   |           +---Blade
    |   |           |       BladeAppendTest.php
    |   |           |       BladeBreakStatementsTest.php
    |   |           |       BladeCannotStatementsTest.php
    |   |           |       BladeCanStatementsTest.php
    |   |           |       BladeCommentsTest.php
    |   |           |       BladeContinueStatementsTest.php
    |   |           |       BladeCustomTest.php
    |   |           |       BladeEachTest.php
    |   |           |       BladeEchoTest.php
    |   |           |       BladeElseIfStatementsTest.php
    |   |           |       BladeElseStatementsTest.php
    |   |           |       BladeEndphpStatementsTest.php
    |   |           |       BladeEndSectionsTest.php
    |   |           |       BladeEndSectionTest.php
    |   |           |       BladeEscapedTest.php
    |   |           |       BladeExpressionTest.php
    |   |           |       BladeExtendsTest.php
    |   |           |       BladeForeachStatementsTest.php
    |   |           |       BladeForelseStatementsTest.php
    |   |           |       BladeForStatementsTest.php
    |   |           |       BladeHasSectionTest.php
    |   |           |       BladeIfIEmptyStatementsTest.php
    |   |           |       BladeIfIssetStatementsTest.php
    |   |           |       BladeIfStatementsTest.php
    |   |           |       BladeIncludeIfTest.php
    |   |           |       BladeIncludeTest.php
    |   |           |       BladeIncludeWhenTest.php
    |   |           |       BladeLangTest.php
    |   |           |       BladeOverwriteSectionTest.php
    |   |           |       BladePhpStatementsTest.php
    |   |           |       BladePushTest.php
    |   |           |       BladeSectionTest.php
    |   |           |       BladeShowTest.php
    |   |           |       BladeStackTest.php
    |   |           |       BladeUnlessStatementsTest.php
    |   |           |       BladeUnsetStatementsTest.php
    |   |           |       BladeVerbatimTest.php
    |   |           |       BladeWhileStatementsTest.php
    |   |           |       BladeYieldTest.php
    |   |           |       
    |   |           \---fixtures
    |   |               |   basic.php
    |   |               |   component.php
    |   |               |   section-exception-layout.php
    |   |               |   section-exception.php
    |   |               |   
    |   |               +---namespaced
    |   |               |       basic.php
    |   |               |       
    |   |               \---nested
    |   |                       basic.php
    |   |                       child.php
    |   |                       
    |   \---tinker
    |       |   .editorconfig
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .travis.yml
    |       |   composer.json
    |       |   LICENSE.txt
    |       |   phpunit.xml
    |       |   README.md
    |       |   
    |       +---src
    |       |   |   TinkerCaster.php
    |       |   |   TinkerServiceProvider.php
    |       |   |   
    |       |   \---Console
    |       |           TinkerCommand.php
    |       |           
    |       \---tests
    |               TinkerCasterTest.php
    |               
    +---league
    |   \---flysystem
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .php_cs
    |       |   .scrutinizer.yml
    |       |   .travis.yml
    |       |   appveyor.yml
    |       |   changelog.md
    |       |   composer.json
    |       |   LICENSE
    |       |   phpspec.yml
    |       |   phpunit.hhvm.xml
    |       |   phpunit.php
    |       |   phpunit.xml
    |       |   README.md
    |       |   
    |       +---build
    |       |       handle_brew_pkg.sh
    |       |       osx_install_composer.sh
    |       |       prepare_osx_env.sh
    |       |       
    |       +---docs
    |       |   |   .gitignore
    |       |   |   api.md
    |       |   |   caching.md
    |       |   |   CNAME
    |       |   |   core-concepts.md
    |       |   |   creating-an-adapter.md
    |       |   |   index.md
    |       |   |   installation.md
    |       |   |   integrations.md
    |       |   |   mount-manager.md
    |       |   |   performance.md
    |       |   |   plugins.md
    |       |   |   recipes.md
    |       |   |   upgrade-to-1.0.0.md
    |       |   |   
    |       |   +---adapter
    |       |   |       aws-s3-v2.md
    |       |   |       aws-s3-v3.md
    |       |   |       azure.md
    |       |   |       copy.md
    |       |   |       dropbox.md
    |       |   |       ftp.md
    |       |   |       gridfs.md
    |       |   |       local.md
    |       |   |       memory.md
    |       |   |       null-test.md
    |       |   |       phpcr.md
    |       |   |       rackspace.md
    |       |   |       replicate.md
    |       |   |       sftp.md
    |       |   |       webdav.md
    |       |   |       zip-archive.md
    |       |   |       
    |       |   +---_data
    |       |   |       images.yml
    |       |   |       menu.yml
    |       |   |       project.yml
    |       |   |       
    |       |   \---_layouts
    |       |           default.html
    |       |           
    |       +---spec
    |       |       FilesystemSpec.php
    |       |       
    |       +---src
    |       |   |   AdapterInterface.php
    |       |   |   Config.php
    |       |   |   ConfigAwareTrait.php
    |       |   |   Directory.php
    |       |   |   Exception.php
    |       |   |   File.php
    |       |   |   FileExistsException.php
    |       |   |   FileNotFoundException.php
    |       |   |   Filesystem.php
    |       |   |   FilesystemInterface.php
    |       |   |   FilesystemNotFoundException.php
    |       |   |   Handler.php
    |       |   |   MountManager.php
    |       |   |   NotSupportedException.php
    |       |   |   PluginInterface.php
    |       |   |   ReadInterface.php
    |       |   |   RootViolationException.php
    |       |   |   SafeStorage.php
    |       |   |   UnreadableFileException.php
    |       |   |   Util.php
    |       |   |   
    |       |   +---Adapter
    |       |   |   |   AbstractAdapter.php
    |       |   |   |   AbstractFtpAdapter.php
    |       |   |   |   CanOverwriteFiles.php
    |       |   |   |   Ftp.php
    |       |   |   |   Ftpd.php
    |       |   |   |   Local.php
    |       |   |   |   NullAdapter.php
    |       |   |   |   SynologyFtp.php
    |       |   |   |   
    |       |   |   \---Polyfill
    |       |   |           NotSupportingVisibilityTrait.php
    |       |   |           StreamedCopyTrait.php
    |       |   |           StreamedReadingTrait.php
    |       |   |           StreamedTrait.php
    |       |   |           StreamedWritingTrait.php
    |       |   |           
    |       |   +---Plugin
    |       |   |       AbstractPlugin.php
    |       |   |       EmptyDir.php
    |       |   |       ForcedCopy.php
    |       |   |       ForcedRename.php
    |       |   |       GetWithMetadata.php
    |       |   |       ListFiles.php
    |       |   |       ListPaths.php
    |       |   |       ListWith.php
    |       |   |       PluggableTrait.php
    |       |   |       PluginNotFoundException.php
    |       |   |       
    |       |   \---Util
    |       |           ContentListingFormatter.php
    |       |           MimeType.php
    |       |           StreamHasher.php
    |       |           
    |       +---stub
    |       |       FileOverwritingAdapterStub.php
    |       |       NotSupportingVisibilityStub.php
    |       |       PluginStub.php
    |       |       StreamedCopyStub.php
    |       |       StreamedReadingStub.php
    |       |       StreamedWritingStub.php
    |       |       
    |       \---tests
    |               AdaptersThatCanOverwriteFilesTest.php
    |               ConfigTests.php
    |               EmptyDirPluginTests.php
    |               FailTests.php
    |               FilesystemTests.php
    |               FileTests.php
    |               FlysystemStreamTests.php
    |               ForcedCopyPluginTests.php
    |               ForcedRenamePluginTests.php
    |               FtpdTests.php
    |               FtpTests.php
    |               GetWithMetadataTests.php
    |               HandlerTests.php
    |               ListFilesTests.php
    |               ListPathsTests.php
    |               ListWithTests.php
    |               LocalAdapterTests.php
    |               MountManagerTests.php
    |               NotSupportingVisivilityTests.php
    |               NullAdapterTests.php
    |               PluginTests.php
    |               StreamedCopyPolyfilTests.php
    |               StreamedReadingTraitTests.php
    |               StreamedWritingPolyfillTests.php
    |               StreamHasherTest.php
    |               UtilMimeTests.php
    |               UtilTests.php
    |               
    +---mockery
    |   \---mockery
    |       |   .gitignore
    |       |   .php_cs
    |       |   .scrutinizer.yml
    |       |   .styleci.yml
    |       |   .travis.yml
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   CONTRIBUTING.md
    |       |   LICENSE
    |       |   package.xml
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---docs
    |       |   |   .gitignore
    |       |   |   conf.py
    |       |   |   index.rst
    |       |   |   Makefile
    |       |   |   README.md
    |       |   |   
    |       |   +---cookbook
    |       |   |       default_expectations.rst
    |       |   |       detecting_mock_objects.rst
    |       |   |       index.rst
    |       |   |       map.rst.inc
    |       |   |       mocking_hard_dependencies.rst
    |       |   |       
    |       |   +---getting_started
    |       |   |       index.rst
    |       |   |       installation.rst
    |       |   |       map.rst.inc
    |       |   |       simple_example.rst
    |       |   |       upgrading.rst
    |       |   |       
    |       |   \---reference
    |       |       |   argument_validation.rst
    |       |       |   demeter_chains.rst
    |       |       |   expectations.rst
    |       |       |   final_methods_classes.rst
    |       |       |   index.rst
    |       |       |   instance_mocking.rst
    |       |       |   magic_methods.rst
    |       |       |   map.rst.inc
    |       |       |   object_recording.rst
    |       |       |   partial_mocks.rst
    |       |       |   pass_by_reference_behaviours.rst
    |       |       |   phpunit_integration.rst
    |       |       |   public_properties.rst
    |       |       |   public_static_properties.rst
    |       |       |   quick_examples.rst
    |       |       |   startup_methods.rst
    |       |       |   
    |       |       \---mockery
    |       |               configuration.rst
    |       |               exceptions.rst
    |       |               gotchas.rst
    |       |               index.rst
    |       |               reserved_method_names.rst
    |       |               
    |       +---examples
    |       |   \---starship
    |       |           Bootstrap.php
    |       |           phpunit.xml
    |       |           Starship.php
    |       |           StarshipTest.php
    |       |           
    |       +---library
    |       |   |   Mockery.php
    |       |   |   
    |       |   \---Mockery
    |       |       |   CompositeExpectation.php
    |       |       |   Configuration.php
    |       |       |   Container.php
    |       |       |   Exception.php
    |       |       |   Expectation.php
    |       |       |   ExpectationDirector.php
    |       |       |   ExpectationInterface.php
    |       |       |   Instantiator.php
    |       |       |   Loader.php
    |       |       |   MethodCall.php
    |       |       |   Mock.php
    |       |       |   MockInterface.php
    |       |       |   ReceivedMethodCalls.php
    |       |       |   Recorder.php
    |       |       |   Undefined.php
    |       |       |   VerificationDirector.php
    |       |       |   VerificationExpectation.php
    |       |       |   
    |       |       +---Adapter
    |       |       |   \---Phpunit
    |       |       |           MockeryPHPUnitIntegration.php
    |       |       |           MockeryTestCase.php
    |       |       |           TestListener.php
    |       |       |           
    |       |       +---CountValidator
    |       |       |       AtLeast.php
    |       |       |       AtMost.php
    |       |       |       CountValidatorAbstract.php
    |       |       |       Exact.php
    |       |       |       Exception.php
    |       |       |       
    |       |       +---Exception
    |       |       |       InvalidCountException.php
    |       |       |       InvalidOrderException.php
    |       |       |       NoMatchingExpectationException.php
    |       |       |       RuntimeException.php
    |       |       |       
    |       |       +---Generator
    |       |       |   |   CachingGenerator.php
    |       |       |   |   DefinedTargetClass.php
    |       |       |   |   Generator.php
    |       |       |   |   Method.php
    |       |       |   |   MockConfiguration.php
    |       |       |   |   MockConfigurationBuilder.php
    |       |       |   |   MockDefinition.php
    |       |       |   |   Parameter.php
    |       |       |   |   StringManipulationGenerator.php
    |       |       |   |   TargetClass.php
    |       |       |   |   UndefinedTargetClass.php
    |       |       |   |   
    |       |       |   \---StringManipulation
    |       |       |       \---Pass
    |       |       |               CallTypeHintPass.php
    |       |       |               ClassNamePass.php
    |       |       |               ClassPass.php
    |       |       |               InstanceMockPass.php
    |       |       |               InterfacePass.php
    |       |       |               MethodDefinitionPass.php
    |       |       |               Pass.php
    |       |       |               RemoveBuiltinMethodsThatAreFinalPass.php
    |       |       |               RemoveUnserializeForInternalSerializableClassesPass.php
    |       |       |               
    |       |       +---Loader
    |       |       |       EvalLoader.php
    |       |       |       Loader.php
    |       |       |       RequireLoader.php
    |       |       |       
    |       |       \---Matcher
    |       |               Any.php
    |       |               AnyOf.php
    |       |               Closure.php
    |       |               Contains.php
    |       |               Ducktype.php
    |       |               HasKey.php
    |       |               HasValue.php
    |       |               MatcherAbstract.php
    |       |               MustBe.php
    |       |               Not.php
    |       |               NotAnyOf.php
    |       |               Subset.php
    |       |               Type.php
    |       |               
    |       +---tests
    |       |   |   Bootstrap.php
    |       |   |   
    |       |   \---Mockery
    |       |       |   AdhocTest.php
    |       |       |   ContainerTest.php
    |       |       |   DemeterChainTest.php
    |       |       |   ExpectationTest.php
    |       |       |   HamcrestExpectationTest.php
    |       |       |   LoaderTest.php
    |       |       |   MockClassWithFinalWakeupTest.php
    |       |       |   MockClassWithUnknownTypeHintTest.php
    |       |       |   MockeryCanMockMultipleInterfacesWhichOverlapTest.php
    |       |       |   MockingMethodsWithNullableParametersTest.php
    |       |       |   MockingNullableMethodsTest.php
    |       |       |   MockingParameterAndReturnTypesTest.php
    |       |       |   MockingProtectedMethodsTest.php
    |       |       |   MockingVariadicArgumentsTest.php
    |       |       |   MockingVoidMethodsTest.php
    |       |       |   MockTest.php
    |       |       |   NamedMockTest.php
    |       |       |   RecorderTest.php
    |       |       |   SpyTest.php
    |       |       |   WithFormatterExpectationTest.php
    |       |       |   
    |       |       +---Fixtures
    |       |       |       MethodWithNullableParameters.php
    |       |       |       MethodWithNullableReturnType.php
    |       |       |       VoidMethod.php
    |       |       |       
    |       |       +---Generator
    |       |       |   |   DefinedTargetClassTest.php
    |       |       |   |   MockConfigurationTest.php
    |       |       |   |   
    |       |       |   \---StringManipulation
    |       |       |       \---Pass
    |       |       |               CallTypeHintPassTest.php
    |       |       |               ClassNamePassTest.php
    |       |       |               InstanceMockPassTest.php
    |       |       |               InterfacePassTest.php
    |       |       |               
    |       |       +---Loader
    |       |       |       EvalLoaderTest.php
    |       |       |       LoaderTestCase.php
    |       |       |       RequireLoaderTest.php
    |       |       |       
    |       |       +---Test
    |       |       |   \---Generator
    |       |       |           MockConfigurationBuilderTest.php
    |       |       |           
    |       |       \---_files
    |       |               file.txt
    |       |               
    |       \---travis
    |               after_success.sh
    |               before_script.sh
    |               extra.ini
    |               install.sh
    |               script.sh
    |               
    +---monolog
    |   \---monolog
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .php_cs
    |       |   .travis.yml
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---doc
    |       |       01-usage.md
    |       |       02-handlers-formatters-processors.md
    |       |       03-utilities.md
    |       |       04-extending.md
    |       |       sockets.md
    |       |       
    |       +---src
    |       |   \---Monolog
    |       |       |   ErrorHandler.php
    |       |       |   Logger.php
    |       |       |   Registry.php
    |       |       |   
    |       |       +---Formatter
    |       |       |       ChromePHPFormatter.php
    |       |       |       ElasticaFormatter.php
    |       |       |       FlowdockFormatter.php
    |       |       |       FluentdFormatter.php
    |       |       |       FormatterInterface.php
    |       |       |       GelfMessageFormatter.php
    |       |       |       HtmlFormatter.php
    |       |       |       JsonFormatter.php
    |       |       |       LineFormatter.php
    |       |       |       LogglyFormatter.php
    |       |       |       LogstashFormatter.php
    |       |       |       MongoDBFormatter.php
    |       |       |       NormalizerFormatter.php
    |       |       |       ScalarFormatter.php
    |       |       |       WildfireFormatter.php
    |       |       |       
    |       |       +---Handler
    |       |       |   |   AbstractHandler.php
    |       |       |   |   AbstractProcessingHandler.php
    |       |       |   |   AbstractSyslogHandler.php
    |       |       |   |   AmqpHandler.php
    |       |       |   |   BrowserConsoleHandler.php
    |       |       |   |   BufferHandler.php
    |       |       |   |   ChromePHPHandler.php
    |       |       |   |   CouchDBHandler.php
    |       |       |   |   CubeHandler.php
    |       |       |   |   DeduplicationHandler.php
    |       |       |   |   DoctrineCouchDBHandler.php
    |       |       |   |   DynamoDbHandler.php
    |       |       |   |   ElasticSearchHandler.php
    |       |       |   |   ErrorLogHandler.php
    |       |       |   |   FilterHandler.php
    |       |       |   |   FingersCrossedHandler.php
    |       |       |   |   FirePHPHandler.php
    |       |       |   |   FleepHookHandler.php
    |       |       |   |   FlowdockHandler.php
    |       |       |   |   GelfHandler.php
    |       |       |   |   GroupHandler.php
    |       |       |   |   HandlerInterface.php
    |       |       |   |   HandlerWrapper.php
    |       |       |   |   HipChatHandler.php
    |       |       |   |   IFTTTHandler.php
    |       |       |   |   LogEntriesHandler.php
    |       |       |   |   LogglyHandler.php
    |       |       |   |   MailHandler.php
    |       |       |   |   MandrillHandler.php
    |       |       |   |   MissingExtensionException.php
    |       |       |   |   MongoDBHandler.php
    |       |       |   |   NativeMailerHandler.php
    |       |       |   |   NewRelicHandler.php
    |       |       |   |   NullHandler.php
    |       |       |   |   PHPConsoleHandler.php
    |       |       |   |   PsrHandler.php
    |       |       |   |   PushoverHandler.php
    |       |       |   |   RavenHandler.php
    |       |       |   |   RedisHandler.php
    |       |       |   |   RollbarHandler.php
    |       |       |   |   RotatingFileHandler.php
    |       |       |   |   SamplingHandler.php
    |       |       |   |   SlackbotHandler.php
    |       |       |   |   SlackHandler.php
    |       |       |   |   SlackWebhookHandler.php
    |       |       |   |   SocketHandler.php
    |       |       |   |   StreamHandler.php
    |       |       |   |   SwiftMailerHandler.php
    |       |       |   |   SyslogHandler.php
    |       |       |   |   SyslogUdpHandler.php
    |       |       |   |   TestHandler.php
    |       |       |   |   WhatFailureGroupHandler.php
    |       |       |   |   ZendMonitorHandler.php
    |       |       |   |   
    |       |       |   +---Curl
    |       |       |   |       Util.php
    |       |       |   |       
    |       |       |   +---FingersCrossed
    |       |       |   |       ActivationStrategyInterface.php
    |       |       |   |       ChannelLevelActivationStrategy.php
    |       |       |   |       ErrorLevelActivationStrategy.php
    |       |       |   |       
    |       |       |   +---Slack
    |       |       |   |       SlackRecord.php
    |       |       |   |       
    |       |       |   \---SyslogUdp
    |       |       |           UdpSocket.php
    |       |       |           
    |       |       \---Processor
    |       |               GitProcessor.php
    |       |               IntrospectionProcessor.php
    |       |               MemoryPeakUsageProcessor.php
    |       |               MemoryProcessor.php
    |       |               MemoryUsageProcessor.php
    |       |               MercurialProcessor.php
    |       |               ProcessIdProcessor.php
    |       |               PsrLogMessageProcessor.php
    |       |               TagProcessor.php
    |       |               UidProcessor.php
    |       |               WebProcessor.php
    |       |               
    |       \---tests
    |           \---Monolog
    |               |   ErrorHandlerTest.php
    |               |   LoggerTest.php
    |               |   PsrLogCompatTest.php
    |               |   RegistryTest.php
    |               |   TestCase.php
    |               |   
    |               +---Formatter
    |               |       ChromePHPFormatterTest.php
    |               |       ElasticaFormatterTest.php
    |               |       FlowdockFormatterTest.php
    |               |       FluentdFormatterTest.php
    |               |       GelfMessageFormatterTest.php
    |               |       JsonFormatterTest.php
    |               |       LineFormatterTest.php
    |               |       LogglyFormatterTest.php
    |               |       LogstashFormatterTest.php
    |               |       MongoDBFormatterTest.php
    |               |       NormalizerFormatterTest.php
    |               |       ScalarFormatterTest.php
    |               |       WildfireFormatterTest.php
    |               |       
    |               +---Handler
    |               |   |   AbstractHandlerTest.php
    |               |   |   AbstractProcessingHandlerTest.php
    |               |   |   AmqpHandlerTest.php
    |               |   |   BrowserConsoleHandlerTest.php
    |               |   |   BufferHandlerTest.php
    |               |   |   ChromePHPHandlerTest.php
    |               |   |   CouchDBHandlerTest.php
    |               |   |   DeduplicationHandlerTest.php
    |               |   |   DoctrineCouchDBHandlerTest.php
    |               |   |   DynamoDbHandlerTest.php
    |               |   |   ElasticSearchHandlerTest.php
    |               |   |   ErrorLogHandlerTest.php
    |               |   |   FilterHandlerTest.php
    |               |   |   FingersCrossedHandlerTest.php
    |               |   |   FirePHPHandlerTest.php
    |               |   |   FleepHookHandlerTest.php
    |               |   |   FlowdockHandlerTest.php
    |               |   |   GelfHandlerLegacyTest.php
    |               |   |   GelfHandlerTest.php
    |               |   |   GelfMockMessagePublisher.php
    |               |   |   GroupHandlerTest.php
    |               |   |   HandlerWrapperTest.php
    |               |   |   HipChatHandlerTest.php
    |               |   |   LogEntriesHandlerTest.php
    |               |   |   MailHandlerTest.php
    |               |   |   MockRavenClient.php
    |               |   |   MongoDBHandlerTest.php
    |               |   |   NativeMailerHandlerTest.php
    |               |   |   NewRelicHandlerTest.php
    |               |   |   NullHandlerTest.php
    |               |   |   PHPConsoleHandlerTest.php
    |               |   |   PsrHandlerTest.php
    |               |   |   PushoverHandlerTest.php
    |               |   |   RavenHandlerTest.php
    |               |   |   RedisHandlerTest.php
    |               |   |   RotatingFileHandlerTest.php
    |               |   |   SamplingHandlerTest.php
    |               |   |   SlackbotHandlerTest.php
    |               |   |   SlackHandlerTest.php
    |               |   |   SlackWebhookHandlerTest.php
    |               |   |   SocketHandlerTest.php
    |               |   |   StreamHandlerTest.php
    |               |   |   SwiftMailerHandlerTest.php
    |               |   |   SyslogHandlerTest.php
    |               |   |   SyslogUdpHandlerTest.php
    |               |   |   TestHandlerTest.php
    |               |   |   UdpSocketTest.php
    |               |   |   WhatFailureGroupHandlerTest.php
    |               |   |   ZendMonitorHandlerTest.php
    |               |   |   
    |               |   +---Fixtures
    |               |   |       .gitkeep
    |               |   |       
    |               |   \---Slack
    |               |           SlackRecordTest.php
    |               |           
    |               \---Processor
    |                       GitProcessorTest.php
    |                       IntrospectionProcessorTest.php
    |                       MemoryPeakUsageProcessorTest.php
    |                       MemoryUsageProcessorTest.php
    |                       MercurialProcessorTest.php
    |                       ProcessIdProcessorTest.php
    |                       PsrLogMessageProcessorTest.php
    |                       TagProcessorTest.php
    |                       UidProcessorTest.php
    |                       WebProcessorTest.php
    |                       
    +---mtdowling
    |   \---cron-expression
    |       |   .editorconfig
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .php_cs
    |       |   .styleci.yml
    |       |   .travis.yml
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---src
    |       |   \---Cron
    |       |           AbstractField.php
    |       |           CronExpression.php
    |       |           DayOfMonthField.php
    |       |           DayOfWeekField.php
    |       |           FieldFactory.php
    |       |           FieldInterface.php
    |       |           HoursField.php
    |       |           MinutesField.php
    |       |           MonthField.php
    |       |           YearField.php
    |       |           
    |       \---tests
    |           \---Cron
    |                   AbstractFieldTest.php
    |                   CronExpressionTest.php
    |                   DayOfMonthFieldTest.php
    |                   DayOfWeekFieldTest.php
    |                   FieldFactoryTest.php
    |                   HoursFieldTest.php
    |                   MinutesFieldTest.php
    |                   MonthFieldTest.php
    |                   YearFieldTest.php
    |                   
    +---myclabs
    |   \---deep-copy
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .travis.yml
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---doc
    |       |       clone.png
    |       |       deep-clone.png
    |       |       deep-copy.png
    |       |       graph.png
    |       |       
    |       +---src
    |       |   \---DeepCopy
    |       |       |   DeepCopy.php
    |       |       |   
    |       |       +---Exception
    |       |       |       CloneException.php
    |       |       |       
    |       |       +---Filter
    |       |       |   |   Filter.php
    |       |       |   |   KeepFilter.php
    |       |       |   |   ReplaceFilter.php
    |       |       |   |   SetNullFilter.php
    |       |       |   |   
    |       |       |   \---Doctrine
    |       |       |           DoctrineCollectionFilter.php
    |       |       |           DoctrineEmptyCollectionFilter.php
    |       |       |           DoctrineProxyFilter.php
    |       |       |           
    |       |       +---Matcher
    |       |       |   |   Matcher.php
    |       |       |   |   PropertyMatcher.php
    |       |       |   |   PropertyNameMatcher.php
    |       |       |   |   PropertyTypeMatcher.php
    |       |       |   |   
    |       |       |   \---Doctrine
    |       |       |           DoctrineProxyMatcher.php
    |       |       |           
    |       |       +---Reflection
    |       |       |       ReflectionHelper.php
    |       |       |       
    |       |       +---TypeFilter
    |       |       |   |   ReplaceFilter.php
    |       |       |   |   ShallowCopyFilter.php
    |       |       |   |   TypeFilter.php
    |       |       |   |   
    |       |       |   \---Spl
    |       |       |           SplDoublyLinkedList.php
    |       |       |           
    |       |       \---TypeMatcher
    |       |               TypeMatcher.php
    |       |               
    |       \---tests
    |           \---DeepCopyTest
    |               |   AbstractTestClass.php
    |               |   DeepCopyTest.php
    |               |   
    |               +---Filter
    |               |   |   KeepFilterTest.php
    |               |   |   ReplaceFilterTest.php
    |               |   |   SetNullFilterTest.php
    |               |   |   
    |               |   \---Doctrine
    |               |           DoctrineCollectionFilterTest.php
    |               |           DoctrineEmptyCollectionFilterTest.php
    |               |           
    |               +---Matcher
    |               |       PropertyMatcherTest.php
    |               |       PropertyNameMatcherTest.php
    |               |       PropertyTypeMatcherTest.php
    |               |       
    |               \---Reflection
    |                       ReflectionHelperTest.php
    |                       
    +---nesbot
    |   \---carbon
    |       |   .codecov.yml
    |       |   .editorconfig
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .php_cs.dist
    |       |   .styleci.yml
    |       |   .travis.yml
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   readme.md
    |       |   
    |       +---src
    |       |   \---Carbon
    |       |       |   Carbon.php
    |       |       |   CarbonInterval.php
    |       |       |   
    |       |       +---Exceptions
    |       |       |       InvalidDateException.php
    |       |       |       
    |       |       \---Lang
    |       |               af.php
    |       |               ar.php
    |       |               az.php
    |       |               bg.php
    |       |               bn.php
    |       |               ca.php
    |       |               cs.php
    |       |               da.php
    |       |               de.php
    |       |               el.php
    |       |               en.php
    |       |               eo.php
    |       |               es.php
    |       |               et.php
    |       |               eu.php
    |       |               fa.php
    |       |               fi.php
    |       |               fo.php
    |       |               fr.php
    |       |               gl.php
    |       |               he.php
    |       |               hr.php
    |       |               hu.php
    |       |               hy.php
    |       |               id.php
    |       |               it.php
    |       |               ja.php
    |       |               ka.php
    |       |               km.php
    |       |               ko.php
    |       |               lt.php
    |       |               lv.php
    |       |               mk.php
    |       |               ms.php
    |       |               nl.php
    |       |               no.php
    |       |               pl.php
    |       |               pt.php
    |       |               pt_BR.php
    |       |               ro.php
    |       |               ru.php
    |       |               sk.php
    |       |               sl.php
    |       |               sq.php
    |       |               sr.php
    |       |               sr_Cyrl_ME.php
    |       |               sr_Latn_ME.php
    |       |               sr_ME.php
    |       |               sv.php
    |       |               th.php
    |       |               tr.php
    |       |               uk.php
    |       |               ur.php
    |       |               uz.php
    |       |               vi.php
    |       |               zh.php
    |       |               zh_TW.php
    |       |               
    |       \---tests
    |           |   AbstractTestCase.php
    |           |   
    |           +---Carbon
    |           |   |   AddMonthsTest.php
    |           |   |   AddTest.php
    |           |   |   ComparisonTest.php
    |           |   |   ConstructTest.php
    |           |   |   CopyTest.php
    |           |   |   CreateFromDateTest.php
    |           |   |   CreateFromFormatTest.php
    |           |   |   CreateFromTimestampTest.php
    |           |   |   CreateFromTimeTest.php
    |           |   |   CreateSafeTest.php
    |           |   |   CreateTest.php
    |           |   |   DayOfWeekModifiersTest.php
    |           |   |   DiffTest.php
    |           |   |   ExpressiveComparisonTest.php
    |           |   |   FluidSettersTest.php
    |           |   |   GettersTest.php
    |           |   |   InstanceTest.php
    |           |   |   IssetTest.php
    |           |   |   IsTest.php
    |           |   |   LocalizationTest.php
    |           |   |   ModifyTest.php
    |           |   |   NowAndOtherStaticHelpersTest.php
    |           |   |   RelativeTest.php
    |           |   |   SerializationTest.php
    |           |   |   SettersTest.php
    |           |   |   StartEndOfTest.php
    |           |   |   StringsTest.php
    |           |   |   SubTest.php
    |           |   |   TestingAidsTest.php
    |           |   |   
    |           |   \---Fixtures
    |           |           MyCarbon.php
    |           |           
    |           +---CarbonInterval
    |           |       AddTest.php
    |           |       ConstructTest.php
    |           |       ForHumansTest.php
    |           |       GettersTest.php
    |           |       SettersTest.php
    |           |       SpecTest.php
    |           |       
    |           \---Localization
    |                   CaTest.php
    |                   DaTest.php
    |                   DeTest.php
    |                   EnTest.php
    |                   EsTest.php
    |                   FaTest.php
    |                   FoTest.php
    |                   FrTest.php
    |                   GlTest.php
    |                   HuTest.php
    |                   HyTest.php
    |                   ItTest.php
    |                   JaTest.php
    |                   KaTest.php
    |                   KmTest.php
    |                   KoTest.php
    |                   LtTest.php
    |                   MkTest.php
    |                   NlTest.php
    |                   PtTest.php
    |                   SrMeTest.php
    |                   TrTest.php
    |                   UkTest.php
    |                   UrTest.php
    |                   UzTest.php
    |                   ZhTest.php
    |                   
    +---nikic
    |   \---php-parser
    |       |   .gitignore
    |       |   .travis.yml
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   UPGRADE-1.0.md
    |       |   UPGRADE-2.0.md
    |       |   UPGRADE-3.0.md
    |       |   
    |       +---bin
    |       |       php-parse
    |       |       
    |       +---doc
    |       |   |   0_Introduction.markdown
    |       |   |   2_Usage_of_basic_components.markdown
    |       |   |   3_Other_node_tree_representations.markdown
    |       |   |   4_Code_generation.markdown
    |       |   |   
    |       |   \---component
    |       |           Error_handling.markdown
    |       |           Lexer.markdown
    |       |           
    |       +---grammar
    |       |       parser.template
    |       |       php5.y
    |       |       php7.y
    |       |       README.md
    |       |       rebuildParsers.php
    |       |       tokens.template
    |       |       tokens.y
    |       |       
    |       +---lib
    |       |   |   bootstrap.php
    |       |   |   
    |       |   \---PhpParser
    |       |       |   Autoloader.php
    |       |       |   Builder.php
    |       |       |   BuilderAbstract.php
    |       |       |   BuilderFactory.php
    |       |       |   Comment.php
    |       |       |   Error.php
    |       |       |   ErrorHandler.php
    |       |       |   Lexer.php
    |       |       |   Node.php
    |       |       |   NodeAbstract.php
    |       |       |   NodeDumper.php
    |       |       |   NodeTraverser.php
    |       |       |   NodeTraverserInterface.php
    |       |       |   NodeVisitor.php
    |       |       |   NodeVisitorAbstract.php
    |       |       |   Parser.php
    |       |       |   ParserAbstract.php
    |       |       |   ParserFactory.php
    |       |       |   PrettyPrinterAbstract.php
    |       |       |   Serializer.php
    |       |       |   Unserializer.php
    |       |       |   
    |       |       +---Builder
    |       |       |       Class_.php
    |       |       |       Declaration.php
    |       |       |       FunctionLike.php
    |       |       |       Function_.php
    |       |       |       Interface_.php
    |       |       |       Method.php
    |       |       |       Namespace_.php
    |       |       |       Param.php
    |       |       |       Property.php
    |       |       |       Trait_.php
    |       |       |       Use_.php
    |       |       |       
    |       |       +---Comment
    |       |       |       Doc.php
    |       |       |       
    |       |       +---ErrorHandler
    |       |       |       Collecting.php
    |       |       |       Throwing.php
    |       |       |       
    |       |       +---Lexer
    |       |       |       Emulative.php
    |       |       |       
    |       |       +---Node
    |       |       |   |   Arg.php
    |       |       |   |   Const_.php
    |       |       |   |   Expr.php
    |       |       |   |   FunctionLike.php
    |       |       |   |   Name.php
    |       |       |   |   NullableType.php
    |       |       |   |   Param.php
    |       |       |   |   Scalar.php
    |       |       |   |   Stmt.php
    |       |       |   |   
    |       |       |   +---Expr
    |       |       |   |   |   ArrayDimFetch.php
    |       |       |   |   |   ArrayItem.php
    |       |       |   |   |   Array_.php
    |       |       |   |   |   Assign.php
    |       |       |   |   |   AssignOp.php
    |       |       |   |   |   AssignRef.php
    |       |       |   |   |   BinaryOp.php
    |       |       |   |   |   BitwiseNot.php
    |       |       |   |   |   BooleanNot.php
    |       |       |   |   |   Cast.php
    |       |       |   |   |   ClassConstFetch.php
    |       |       |   |   |   Clone_.php
    |       |       |   |   |   Closure.php
    |       |       |   |   |   ClosureUse.php
    |       |       |   |   |   ConstFetch.php
    |       |       |   |   |   Empty_.php
    |       |       |   |   |   Error.php
    |       |       |   |   |   ErrorSuppress.php
    |       |       |   |   |   Eval_.php
    |       |       |   |   |   Exit_.php
    |       |       |   |   |   FuncCall.php
    |       |       |   |   |   Include_.php
    |       |       |   |   |   Instanceof_.php
    |       |       |   |   |   Isset_.php
    |       |       |   |   |   List_.php
    |       |       |   |   |   MethodCall.php
    |       |       |   |   |   New_.php
    |       |       |   |   |   PostDec.php
    |       |       |   |   |   PostInc.php
    |       |       |   |   |   PreDec.php
    |       |       |   |   |   PreInc.php
    |       |       |   |   |   Print_.php
    |       |       |   |   |   PropertyFetch.php
    |       |       |   |   |   ShellExec.php
    |       |       |   |   |   StaticCall.php
    |       |       |   |   |   StaticPropertyFetch.php
    |       |       |   |   |   Ternary.php
    |       |       |   |   |   UnaryMinus.php
    |       |       |   |   |   UnaryPlus.php
    |       |       |   |   |   Variable.php
    |       |       |   |   |   YieldFrom.php
    |       |       |   |   |   Yield_.php
    |       |       |   |   |   
    |       |       |   |   +---AssignOp
    |       |       |   |   |       BitwiseAnd.php
    |       |       |   |   |       BitwiseOr.php
    |       |       |   |   |       BitwiseXor.php
    |       |       |   |   |       Concat.php
    |       |       |   |   |       Div.php
    |       |       |   |   |       Minus.php
    |       |       |   |   |       Mod.php
    |       |       |   |   |       Mul.php
    |       |       |   |   |       Plus.php
    |       |       |   |   |       Pow.php
    |       |       |   |   |       ShiftLeft.php
    |       |       |   |   |       ShiftRight.php
    |       |       |   |   |       
    |       |       |   |   +---BinaryOp
    |       |       |   |   |       BitwiseAnd.php
    |       |       |   |   |       BitwiseOr.php
    |       |       |   |   |       BitwiseXor.php
    |       |       |   |   |       BooleanAnd.php
    |       |       |   |   |       BooleanOr.php
    |       |       |   |   |       Coalesce.php
    |       |       |   |   |       Concat.php
    |       |       |   |   |       Div.php
    |       |       |   |   |       Equal.php
    |       |       |   |   |       Greater.php
    |       |       |   |   |       GreaterOrEqual.php
    |       |       |   |   |       Identical.php
    |       |       |   |   |       LogicalAnd.php
    |       |       |   |   |       LogicalOr.php
    |       |       |   |   |       LogicalXor.php
    |       |       |   |   |       Minus.php
    |       |       |   |   |       Mod.php
    |       |       |   |   |       Mul.php
    |       |       |   |   |       NotEqual.php
    |       |       |   |   |       NotIdentical.php
    |       |       |   |   |       Plus.php
    |       |       |   |   |       Pow.php
    |       |       |   |   |       ShiftLeft.php
    |       |       |   |   |       ShiftRight.php
    |       |       |   |   |       Smaller.php
    |       |       |   |   |       SmallerOrEqual.php
    |       |       |   |   |       Spaceship.php
    |       |       |   |   |       
    |       |       |   |   \---Cast
    |       |       |   |           Array_.php
    |       |       |   |           Bool_.php
    |       |       |   |           Double.php
    |       |       |   |           Int_.php
    |       |       |   |           Object_.php
    |       |       |   |           String_.php
    |       |       |   |           Unset_.php
    |       |       |   |           
    |       |       |   +---Name
    |       |       |   |       FullyQualified.php
    |       |       |   |       Relative.php
    |       |       |   |       
    |       |       |   +---Scalar
    |       |       |   |   |   DNumber.php
    |       |       |   |   |   Encapsed.php
    |       |       |   |   |   EncapsedStringPart.php
    |       |       |   |   |   LNumber.php
    |       |       |   |   |   MagicConst.php
    |       |       |   |   |   String_.php
    |       |       |   |   |   
    |       |       |   |   \---MagicConst
    |       |       |   |           Class_.php
    |       |       |   |           Dir.php
    |       |       |   |           File.php
    |       |       |   |           Function_.php
    |       |       |   |           Line.php
    |       |       |   |           Method.php
    |       |       |   |           Namespace_.php
    |       |       |   |           Trait_.php
    |       |       |   |           
    |       |       |   \---Stmt
    |       |       |       |   Break_.php
    |       |       |       |   Case_.php
    |       |       |       |   Catch_.php
    |       |       |       |   ClassConst.php
    |       |       |       |   ClassLike.php
    |       |       |       |   ClassMethod.php
    |       |       |       |   Class_.php
    |       |       |       |   Const_.php
    |       |       |       |   Continue_.php
    |       |       |       |   DeclareDeclare.php
    |       |       |       |   Declare_.php
    |       |       |       |   Do_.php
    |       |       |       |   Echo_.php
    |       |       |       |   ElseIf_.php
    |       |       |       |   Else_.php
    |       |       |       |   Finally_.php
    |       |       |       |   Foreach_.php
    |       |       |       |   For_.php
    |       |       |       |   Function_.php
    |       |       |       |   Global_.php
    |       |       |       |   Goto_.php
    |       |       |       |   GroupUse.php
    |       |       |       |   HaltCompiler.php
    |       |       |       |   If_.php
    |       |       |       |   InlineHTML.php
    |       |       |       |   Interface_.php
    |       |       |       |   Label.php
    |       |       |       |   Namespace_.php
    |       |       |       |   Nop.php
    |       |       |       |   Property.php
    |       |       |       |   PropertyProperty.php
    |       |       |       |   Return_.php
    |       |       |       |   StaticVar.php
    |       |       |       |   Static_.php
    |       |       |       |   Switch_.php
    |       |       |       |   Throw_.php
    |       |       |       |   TraitUse.php
    |       |       |       |   TraitUseAdaptation.php
    |       |       |       |   Trait_.php
    |       |       |       |   TryCatch.php
    |       |       |       |   Unset_.php
    |       |       |       |   UseUse.php
    |       |       |       |   Use_.php
    |       |       |       |   While_.php
    |       |       |       |   
    |       |       |       \---TraitUseAdaptation
    |       |       |               Alias.php
    |       |       |               Precedence.php
    |       |       |               
    |       |       +---NodeVisitor
    |       |       |       NameResolver.php
    |       |       |       
    |       |       +---Parser
    |       |       |       Multiple.php
    |       |       |       Php5.php
    |       |       |       Php7.php
    |       |       |       Tokens.php
    |       |       |       
    |       |       +---PrettyPrinter
    |       |       |       Standard.php
    |       |       |       
    |       |       +---Serializer
    |       |       |       XML.php
    |       |       |       
    |       |       \---Unserializer
    |       |               XML.php
    |       |               
    |       +---test
    |       |   |   bootstrap.php
    |       |   |   
    |       |   +---code
    |       |   |   +---parser
    |       |   |   |   |   blockComments.test
    |       |   |   |   |   comments.test
    |       |   |   |   |   semiReserved.test
    |       |   |   |   |   
    |       |   |   |   +---errorHandling
    |       |   |   |   |       eofError.test
    |       |   |   |   |       lexerErrors.test
    |       |   |   |   |       recovery.test
    |       |   |   |   |       
    |       |   |   |   +---expr
    |       |   |   |   |   |   arrayDef.test
    |       |   |   |   |   |   arrayDestructuring.test
    |       |   |   |   |   |   assign.test
    |       |   |   |   |   |   assignNewByRef.test
    |       |   |   |   |   |   cast.test
    |       |   |   |   |   |   clone.test
    |       |   |   |   |   |   closure.test
    |       |   |   |   |   |   comparison.test
    |       |   |   |   |   |   constant_expr.test
    |       |   |   |   |   |   errorSuppress.test
    |       |   |   |   |   |   exit.test
    |       |   |   |   |   |   includeAndEval.test
    |       |   |   |   |   |   issetAndEmpty.test
    |       |   |   |   |   |   listWithKeys.test
    |       |   |   |   |   |   logic.test
    |       |   |   |   |   |   math.test
    |       |   |   |   |   |   new.test
    |       |   |   |   |   |   newWithoutClass.test
    |       |   |   |   |   |   print.test
    |       |   |   |   |   |   shellExec.test
    |       |   |   |   |   |   ternaryAndCoalesce.test
    |       |   |   |   |   |   variable.test
    |       |   |   |   |   |   
    |       |   |   |   |   +---fetchAndCall
    |       |   |   |   |   |       args.test
    |       |   |   |   |   |       constantDeref.test
    |       |   |   |   |   |       constFetch.test
    |       |   |   |   |   |       funcCall.test
    |       |   |   |   |   |       newDeref.test
    |       |   |   |   |   |       objectAccess.test
    |       |   |   |   |   |       simpleArrayAccess.test
    |       |   |   |   |   |       staticCall.test
    |       |   |   |   |   |       staticPropertyFetch.test
    |       |   |   |   |   |       
    |       |   |   |   |   \---uvs
    |       |   |   |   |           globalNonSimpleVarError.test
    |       |   |   |   |           indirectCall.test
    |       |   |   |   |           isset.test
    |       |   |   |   |           misc.test
    |       |   |   |   |           new.test
    |       |   |   |   |           staticProperty.test
    |       |   |   |   |           
    |       |   |   |   +---scalar
    |       |   |   |   |       constantString.test
    |       |   |   |   |       docString.test
    |       |   |   |   |       docStringNewlines.test
    |       |   |   |   |       encapsedNegVarOffset.test
    |       |   |   |   |       encapsedString.test
    |       |   |   |   |       float.test
    |       |   |   |   |       int.test
    |       |   |   |   |       invalidOctal.test
    |       |   |   |   |       magicConst.test
    |       |   |   |   |       unicodeEscape.test
    |       |   |   |   |       
    |       |   |   |   \---stmt
    |       |   |   |       |   blocklessStatement.test
    |       |   |   |       |   const.test
    |       |   |   |       |   controlFlow.test
    |       |   |   |       |   declare.test
    |       |   |   |       |   echo.test
    |       |   |   |       |   haltCompiler.test
    |       |   |   |       |   haltCompilerInvalidSyntax.test
    |       |   |   |       |   haltCompilerOffset.test
    |       |   |   |       |   haltCompilerOutermostScope.test
    |       |   |   |       |   hashbang.test
    |       |   |   |       |   if.test
    |       |   |   |       |   inlineHTML.test
    |       |   |   |       |   multiCatch.test
    |       |   |   |       |   switch.test
    |       |   |   |       |   tryCatch.test
    |       |   |   |       |   tryWithoutCatch.test
    |       |   |   |       |   unset.test
    |       |   |   |       |   
    |       |   |   |       +---class
    |       |   |   |       |       abstract.test
    |       |   |   |       |       anonymous.test
    |       |   |   |       |       conditional.test
    |       |   |   |       |       constModifierErrors.test
    |       |   |   |       |       constModifiers.test
    |       |   |   |       |       final.test
    |       |   |   |       |       implicitPublic.test
    |       |   |   |       |       interface.test
    |       |   |   |       |       modifier.test
    |       |   |   |       |       name.test
    |       |   |   |       |       php4Style.test
    |       |   |   |       |       simple.test
    |       |   |   |       |       staticMethod.test
    |       |   |   |       |       trait.test
    |       |   |   |       |       
    |       |   |   |       +---function
    |       |   |   |       |       builtinTypeDeclarations.test
    |       |   |   |       |       byRef.test
    |       |   |   |       |       conditional.test
    |       |   |   |       |       defaultValues.test
    |       |   |   |       |       nullableTypes.test
    |       |   |   |       |       returnTypes.test
    |       |   |   |       |       specialVars.test
    |       |   |   |       |       typeDeclarations.test
    |       |   |   |       |       variadic.test
    |       |   |   |       |       variadicDefaultValue.test
    |       |   |   |       |       
    |       |   |   |       +---generator
    |       |   |   |       |       basic.test
    |       |   |   |       |       yieldPrecedence.test
    |       |   |   |       |       yieldUnaryPrecedence.test
    |       |   |   |       |       
    |       |   |   |       +---loop
    |       |   |   |       |       do.test
    |       |   |   |       |       for.test
    |       |   |   |       |       foreach.test
    |       |   |   |       |       while.test
    |       |   |   |       |       
    |       |   |   |       \---namespace
    |       |   |   |               alias.test
    |       |   |   |               braced.test
    |       |   |   |               groupUse.test
    |       |   |   |               groupUseErrors.test
    |       |   |   |               groupUsePositions.test
    |       |   |   |               invalidName.test
    |       |   |   |               mix.test
    |       |   |   |               name.test
    |       |   |   |               nested.test
    |       |   |   |               notBraced.test
    |       |   |   |               nsAfterHashbang.test
    |       |   |   |               outsideStmt.test
    |       |   |   |               outsideStmtInvalid.test
    |       |   |   |               
    |       |   |   \---prettyPrinter
    |       |   |       |   comments.test
    |       |   |       |   inlineHTMLandPHPtest.file-test
    |       |   |       |   onlyInlineHTML.file-test
    |       |   |       |   onlyPHP.file-test
    |       |   |       |   
    |       |   |       +---expr
    |       |   |       |       anonymousClass.test
    |       |   |       |       arrayDestructuring.test
    |       |   |       |       call.test
    |       |   |       |       closure.test
    |       |   |       |       constant_deref.test
    |       |   |       |       docStrings.test
    |       |   |       |       include.test
    |       |   |       |       intrinsics.test
    |       |   |       |       list.test
    |       |   |       |       literals.test
    |       |   |       |       numbers.test
    |       |   |       |       operators.test
    |       |   |       |       parentheses.test
    |       |   |       |       shortArraySyntax.test
    |       |   |       |       stringEscaping.test
    |       |   |       |       uvs.test
    |       |   |       |       variables.test
    |       |   |       |       yield.test
    |       |   |       |       
    |       |   |       \---stmt
    |       |   |               alias.test
    |       |   |               break_continue.test
    |       |   |               class.test
    |       |   |               class_const.test
    |       |   |               const.test
    |       |   |               declare.test
    |       |   |               do_while.test
    |       |   |               for.test
    |       |   |               foreach.test
    |       |   |               function_signatures.test
    |       |   |               global_static_variables.test
    |       |   |               goto.test
    |       |   |               groupUse.test
    |       |   |               haltCompiler.file-test
    |       |   |               if.test
    |       |   |               multiCatch.test
    |       |   |               namespaces.test
    |       |   |               nullable_types.test
    |       |   |               switch.test
    |       |   |               throw.test
    |       |   |               traitUse.test
    |       |   |               tryCatch.test
    |       |   |               while.test
    |       |   |               
    |       |   \---PhpParser
    |       |       |   AutoloaderTest.php
    |       |       |   BuilderFactoryTest.php
    |       |       |   CodeParsingTest.php
    |       |       |   CodeTestAbstract.php
    |       |       |   CommentTest.php
    |       |       |   ErrorTest.php
    |       |       |   LexerTest.php
    |       |       |   NodeAbstractTest.php
    |       |       |   NodeDumperTest.php
    |       |       |   NodeTraverserTest.php
    |       |       |   ParserFactoryTest.php
    |       |       |   ParserTest.php
    |       |       |   PrettyPrinterTest.php
    |       |       |   
    |       |       +---Builder
    |       |       |       ClassTest.php
    |       |       |       FunctionTest.php
    |       |       |       InterfaceTest.php
    |       |       |       MethodTest.php
    |       |       |       NamespaceTest.php
    |       |       |       ParamTest.php
    |       |       |       PropertyTest.php
    |       |       |       TraitTest.php
    |       |       |       UseTest.php
    |       |       |       
    |       |       +---ErrorHandler
    |       |       |       CollectingTest.php
    |       |       |       ThrowingTest.php
    |       |       |       
    |       |       +---Lexer
    |       |       |       EmulativeTest.php
    |       |       |       
    |       |       +---Node
    |       |       |   |   NameTest.php
    |       |       |   |   
    |       |       |   +---Scalar
    |       |       |   |       MagicConstTest.php
    |       |       |   |       StringTest.php
    |       |       |   |       
    |       |       |   \---Stmt
    |       |       |           ClassConstTest.php
    |       |       |           ClassMethodTest.php
    |       |       |           ClassTest.php
    |       |       |           InterfaceTest.php
    |       |       |           PropertyTest.php
    |       |       |           
    |       |       +---NodeVisitor
    |       |       |       NameResolverTest.php
    |       |       |       
    |       |       +---Parser
    |       |       |       MultipleTest.php
    |       |       |       Php5Test.php
    |       |       |       Php7Test.php
    |       |       |       
    |       |       +---Serializer
    |       |       |       XMLTest.php
    |       |       |       
    |       |       \---Unserializer
    |       |               XMLTest.php
    |       |               
    |       \---test_old
    |               run-php-src.sh
    |               run.php
    |               
    +---paragonie
    |   \---random_compat
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .scrutinizer.yml
    |       |   .travis.yml
    |       |   build-phar.sh
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.sh
    |       |   phpunit.xml.dist
    |       |   psalm-autoload.php
    |       |   psalm.xml
    |       |   RATIONALE.md
    |       |   README.md
    |       |   SECURITY.md
    |       |   
    |       +---dist
    |       |       random_compat.phar.pubkey
    |       |       random_compat.phar.pubkey.asc
    |       |       
    |       +---lib
    |       |       byte_safe_strings.php
    |       |       cast_to_int.php
    |       |       error_polyfill.php
    |       |       random.php
    |       |       random_bytes_com_dotnet.php
    |       |       random_bytes_dev_urandom.php
    |       |       random_bytes_libsodium.php
    |       |       random_bytes_libsodium_legacy.php
    |       |       random_bytes_mcrypt.php
    |       |       random_int.php
    |       |       
    |       +---other
    |       |   |   build_phar.php
    |       |   |   
    |       |   \---ide_stubs
    |       |           COM.php
    |       |           com_exception.php
    |       |           libsodium.php
    |       |           README.md
    |       |           
    |       \---tests
    |           +---full
    |           |       DieHardTest.php
    |           |       StatTest.php
    |           |       
    |           +---specific
    |           |       capicom.php
    |           |       dev_urandom.php
    |           |       libsodium.php
    |           |       libsodium_legacy.php
    |           |       mcrypt.php
    |           |       
    |           +---unit
    |           |       RandomBytesTest.php
    |           |       RandomIntTest.php
    |           |       UtilityTest.php
    |           |       
    |           \---unit_with_basedir
    |                   RandomBytesTest.php
    |                   RandomIntTest.php
    |                   UtilityTest.php
    |                   
    +---phpdocumentor
    |   +---reflection-common
    |   |   |   .gitignore
    |   |   |   composer.json
    |   |   |   composer.lock
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Element.php
    |   |   |       File.php
    |   |   |       Fqsen.php
    |   |   |       Location.php
    |   |   |       Project.php
    |   |   |       ProjectFactory.php
    |   |   |       
    |   |   \---tests
    |   |       +---common
    |   |       |       bootstrap.php
    |   |       |       
    |   |       \---unit
    |   |               FqsenTest.php
    |   |               
    |   +---reflection-docblock
    |   |   |   .gitignore
    |   |   |   .scrutinizer.yml
    |   |   |   .travis.yml
    |   |   |   composer.json
    |   |   |   composer.lock
    |   |   |   LICENSE
    |   |   |   phpmd.xml.dist
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---examples
    |   |   |   |   01-interpreting-a-simple-docblock.php
    |   |   |   |   02-interpreting-tags.php
    |   |   |   |   03-reconstituting-a-docblock.php
    |   |   |   |   04-adding-your-own-tag.php
    |   |   |   |   
    |   |   |   \---playing-with-descriptions
    |   |   |           02-escaping.php
    |   |   |           
    |   |   +---src
    |   |   |   |   DocBlock.php
    |   |   |   |   DocBlockFactory.php
    |   |   |   |   DocBlockFactoryInterface.php
    |   |   |   |   
    |   |   |   \---DocBlock
    |   |   |       |   Description.php
    |   |   |       |   DescriptionFactory.php
    |   |   |       |   ExampleFinder.php
    |   |   |       |   Serializer.php
    |   |   |       |   StandardTagFactory.php
    |   |   |       |   Tag.php
    |   |   |       |   TagFactory.php
    |   |   |       |   
    |   |   |       \---Tags
    |   |   |           |   Author.php
    |   |   |           |   BaseTag.php
    |   |   |           |   Covers.php
    |   |   |           |   Deprecated.php
    |   |   |           |   Example.php
    |   |   |           |   Formatter.php
    |   |   |           |   Generic.php
    |   |   |           |   Link.php
    |   |   |           |   Method.php
    |   |   |           |   Param.php
    |   |   |           |   Property.php
    |   |   |           |   PropertyRead.php
    |   |   |           |   PropertyWrite.php
    |   |   |           |   Return_.php
    |   |   |           |   See.php
    |   |   |           |   Since.php
    |   |   |           |   Source.php
    |   |   |           |   Throws.php
    |   |   |           |   Uses.php
    |   |   |           |   Var_.php
    |   |   |           |   Version.php
    |   |   |           |   
    |   |   |           +---Factory
    |   |   |           |       StaticMethod.php
    |   |   |           |       Strategy.php
    |   |   |           |       
    |   |   |           \---Formatter
    |   |   |                   PassthroughFormatter.php
    |   |   |                   
    |   |   \---tests
    |   |       +---integration
    |   |       |       InterpretingDocBlocksTest.php
    |   |       |       ReconstitutingADocBlockTest.php
    |   |       |       UsingTagsTest.php
    |   |       |       
    |   |       \---unit
    |   |           |   DocBlockFactoryTest.php
    |   |           |   DocBlockTest.php
    |   |           |   
    |   |           \---DocBlock
    |   |               |   DescriptionFactoryTest.php
    |   |               |   DescriptionTest.php
    |   |               |   SerializerTest.php
    |   |               |   StandardTagFactoryTest.php
    |   |               |   
    |   |               \---Tags
    |   |                   |   AuthorTest.php
    |   |                   |   CoversTest.php
    |   |                   |   DeprecatedTest.php
    |   |                   |   GenericTest.php
    |   |                   |   LinkTest.php
    |   |                   |   MethodTest.php
    |   |                   |   ParamTest.php
    |   |                   |   PropertyReadTest.php
    |   |                   |   PropertyTest.php
    |   |                   |   PropertyWriteTest.php
    |   |                   |   ReturnTest.php
    |   |                   |   SeeTest.php
    |   |                   |   SinceTest.php
    |   |                   |   SourceTest.php
    |   |                   |   ThrowsTest.php
    |   |                   |   UsesTest.php
    |   |                   |   VarTest.php
    |   |                   |   VersionTest.php
    |   |                   |   
    |   |                   \---Formatter
    |   |                           PassthroughFormatterTest.php
    |   |                           
    |   \---type-resolver
    |       |   .gitignore
    |       |   .scrutinizer.yml
    |       |   .travis.yml
    |       |   composer.json
    |       |   LICENSE
    |       |   phpmd.xml.dist
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---examples
    |       |       01-resolving-simple-types.php
    |       |       02-resolving-classes.php
    |       |       03-resolving-all-elements.php
    |       |       04-discovering-the-context-using-class-reflection.php
    |       |       05-discovering-the-context-using-method-reflection.php
    |       |       06-discovering-the-context-using-file-contents.php
    |       |       Classy.php
    |       |       
    |       +---src
    |       |   |   FqsenResolver.php
    |       |   |   Type.php
    |       |   |   TypeResolver.php
    |       |   |   
    |       |   \---Types
    |       |           Array_.php
    |       |           Boolean.php
    |       |           Callable_.php
    |       |           Compound.php
    |       |           Context.php
    |       |           ContextFactory.php
    |       |           Float_.php
    |       |           Integer.php
    |       |           Mixed.php
    |       |           Null_.php
    |       |           Object_.php
    |       |           Resource.php
    |       |           Scalar.php
    |       |           Self_.php
    |       |           Static_.php
    |       |           String_.php
    |       |           This.php
    |       |           Void_.php
    |       |           
    |       \---tests
    |           \---unit
    |               |   TypeResolverTest.php
    |               |   
    |               \---Types
    |                       ContextFactoryTest.php
    |                       ContextTest.php
    |                       
    +---phpspec
    |   \---prophecy
    |       |   .gitignore
    |       |   .travis.yml
    |       |   CHANGES.md
    |       |   composer.json
    |       |   CONTRIBUTING.md
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---fixtures
    |       |       EmptyClass.php
    |       |       EmptyInterface.php
    |       |       FinalClass.php
    |       |       ModifierInterface.php
    |       |       Named.php
    |       |       OptionalDepsClass.php
    |       |       SpecialMethods.php
    |       |       WithArguments.php
    |       |       WithCallableArgument.php
    |       |       WithFinalMethod.php
    |       |       WithFinalVirtuallyPrivateMethod.php
    |       |       WithProtectedAbstractMethod.php
    |       |       WithReferences.php
    |       |       WithReturnTypehints.php
    |       |       WithStaticMethod.php
    |       |       WithTypehintedVariadicArgument.php
    |       |       WithVariadicArgument.php
    |       |       WithVirtuallyPrivateMethod.php
    |       |       
    |       +---spec
    |       |   \---Prophecy
    |       |       |   ArgumentSpec.php
    |       |       |   ProphetSpec.php
    |       |       |   
    |       |       +---Argument
    |       |       |   |   ArgumentsWildcardSpec.php
    |       |       |   |   
    |       |       |   \---Token
    |       |       |           AnyValuesTokenSpec.php
    |       |       |           AnyValueTokenSpec.php
    |       |       |           ApproximateValueTokenSpec.php
    |       |       |           ArrayCountTokenSpec.php
    |       |       |           ArrayEntryTokenSpec.php
    |       |       |           ArrayEveryEntryTokenSpec.php
    |       |       |           CallbackTokenSpec.php
    |       |       |           ExactValueTokenSpec.php
    |       |       |           IdenticalValueTokenSpec.php
    |       |       |           LogicalAndTokenSpec.php
    |       |       |           LogicalNotTokenSpec.php
    |       |       |           ObjectStateTokenSpec.php
    |       |       |           StringContainsTokenSpec.php
    |       |       |           TypeTokenSpec.php
    |       |       |           
    |       |       +---Call
    |       |       |       CallCenterSpec.php
    |       |       |       CallSpec.php
    |       |       |       
    |       |       +---Comparator
    |       |       |       ClosureComparatorSpec.php
    |       |       |       FactorySpec.php
    |       |       |       ProphecyComparatorSpec.php
    |       |       |       
    |       |       +---Doubler
    |       |       |   |   DoublerSpec.php
    |       |       |   |   LazyDoubleSpec.php
    |       |       |   |   NameGeneratorSpec.php
    |       |       |   |   
    |       |       |   +---ClassPatch
    |       |       |   |       DisableConstructorPatchSpec.php
    |       |       |   |       HhvmExceptionPatchSpec.php
    |       |       |   |       KeywordPatchSpec.php
    |       |       |   |       MagicCallPatchSpec.php
    |       |       |   |       ProphecySubjectPatchSpec.php
    |       |       |   |       ReflectionClassNewInstancePatchSpec.php
    |       |       |   |       SplFileInfoPatchSpec.php
    |       |       |   |       TraversablePatchSpec.php
    |       |       |   |       
    |       |       |   \---Generator
    |       |       |       |   ClassCodeGeneratorSpec.php
    |       |       |       |   ClassCreatorSpec.php
    |       |       |       |   
    |       |       |       \---Node
    |       |       |               ArgumentNodeSpec.php
    |       |       |               ClassNodeSpec.php
    |       |       |               MethodNodeSpec.php
    |       |       |               
    |       |       +---Exception
    |       |       |   +---Call
    |       |       |   |       UnexpectedCallExceptionSpec.php
    |       |       |   |       
    |       |       |   +---Doubler
    |       |       |   |       ClassCreatorExceptionSpec.php
    |       |       |   |       ClassMirrorExceptionSpec.php
    |       |       |   |       ClassNotFoundExceptionSpec.php
    |       |       |   |       DoubleExceptionSpec.php
    |       |       |   |       InterfaceNotFoundExceptionSpec.php
    |       |       |   |       MethodNotExtendableExceptionSpec.php
    |       |       |   |       MethodNotFoundExceptionSpec.php
    |       |       |   |       
    |       |       |   +---Prediction
    |       |       |   |       AggregateExceptionSpec.php
    |       |       |   |       NoCallsExceptionSpec.php
    |       |       |   |       UnexpectedCallsCountExceptionSpec.php
    |       |       |   |       UnexpectedCallsExceptionSpec.php
    |       |       |   |       
    |       |       |   \---Prophecy
    |       |       |           MethodProphecyExceptionSpec.php
    |       |       |           ObjectProphecyExceptionSpec.php
    |       |       |           
    |       |       +---Prediction
    |       |       |       CallbackPredictionSpec.php
    |       |       |       CallPredictionSpec.php
    |       |       |       CallTimesPredictionSpec.php
    |       |       |       NoCallsPredictionSpec.php
    |       |       |       
    |       |       +---Promise
    |       |       |       CallbackPromiseSpec.php
    |       |       |       ReturnArgumentPromiseSpec.php
    |       |       |       ReturnPromiseSpec.php
    |       |       |       ThrowPromiseSpec.php
    |       |       |       
    |       |       +---Prophecy
    |       |       |       MethodProphecySpec.php
    |       |       |       ObjectProphecySpec.php
    |       |       |       RevealerSpec.php
    |       |       |       
    |       |       \---Util
    |       |               StringUtilSpec.php
    |       |               
    |       +---src
    |       |   \---Prophecy
    |       |       |   Argument.php
    |       |       |   Prophet.php
    |       |       |   
    |       |       +---Argument
    |       |       |   |   ArgumentsWildcard.php
    |       |       |   |   
    |       |       |   \---Token
    |       |       |           AnyValuesToken.php
    |       |       |           AnyValueToken.php
    |       |       |           ApproximateValueToken.php
    |       |       |           ArrayCountToken.php
    |       |       |           ArrayEntryToken.php
    |       |       |           ArrayEveryEntryToken.php
    |       |       |           CallbackToken.php
    |       |       |           ExactValueToken.php
    |       |       |           IdenticalValueToken.php
    |       |       |           LogicalAndToken.php
    |       |       |           LogicalNotToken.php
    |       |       |           ObjectStateToken.php
    |       |       |           StringContainsToken.php
    |       |       |           TokenInterface.php
    |       |       |           TypeToken.php
    |       |       |           
    |       |       +---Call
    |       |       |       Call.php
    |       |       |       CallCenter.php
    |       |       |       
    |       |       +---Comparator
    |       |       |       ClosureComparator.php
    |       |       |       Factory.php
    |       |       |       ProphecyComparator.php
    |       |       |       
    |       |       +---Doubler
    |       |       |   |   CachedDoubler.php
    |       |       |   |   DoubleInterface.php
    |       |       |   |   Doubler.php
    |       |       |   |   LazyDouble.php
    |       |       |   |   NameGenerator.php
    |       |       |   |   
    |       |       |   +---ClassPatch
    |       |       |   |       ClassPatchInterface.php
    |       |       |   |       DisableConstructorPatch.php
    |       |       |   |       HhvmExceptionPatch.php
    |       |       |   |       KeywordPatch.php
    |       |       |   |       MagicCallPatch.php
    |       |       |   |       ProphecySubjectPatch.php
    |       |       |   |       ReflectionClassNewInstancePatch.php
    |       |       |   |       SplFileInfoPatch.php
    |       |       |   |       TraversablePatch.php
    |       |       |   |       
    |       |       |   \---Generator
    |       |       |       |   ClassCodeGenerator.php
    |       |       |       |   ClassCreator.php
    |       |       |       |   ClassMirror.php
    |       |       |       |   ReflectionInterface.php
    |       |       |       |   
    |       |       |       \---Node
    |       |       |               ArgumentNode.php
    |       |       |               ClassNode.php
    |       |       |               MethodNode.php
    |       |       |               
    |       |       +---Exception
    |       |       |   |   Exception.php
    |       |       |   |   InvalidArgumentException.php
    |       |       |   |   
    |       |       |   +---Call
    |       |       |   |       UnexpectedCallException.php
    |       |       |   |       
    |       |       |   +---Doubler
    |       |       |   |       ClassCreatorException.php
    |       |       |   |       ClassMirrorException.php
    |       |       |   |       ClassNotFoundException.php
    |       |       |   |       DoubleException.php
    |       |       |   |       DoublerException.php
    |       |       |   |       InterfaceNotFoundException.php
    |       |       |   |       MethodNotExtendableException.php
    |       |       |   |       MethodNotFoundException.php
    |       |       |   |       ReturnByReferenceException.php
    |       |       |   |       
    |       |       |   +---Prediction
    |       |       |   |       AggregateException.php
    |       |       |   |       FailedPredictionException.php
    |       |       |   |       NoCallsException.php
    |       |       |   |       PredictionException.php
    |       |       |   |       UnexpectedCallsCountException.php
    |       |       |   |       UnexpectedCallsException.php
    |       |       |   |       
    |       |       |   \---Prophecy
    |       |       |           MethodProphecyException.php
    |       |       |           ObjectProphecyException.php
    |       |       |           ProphecyException.php
    |       |       |           
    |       |       +---PhpDocumentor
    |       |       |       ClassAndInterfaceTagRetriever.php
    |       |       |       ClassTagRetriever.php
    |       |       |       LegacyClassTagRetriever.php
    |       |       |       MethodTagRetrieverInterface.php
    |       |       |       
    |       |       +---Prediction
    |       |       |       CallbackPrediction.php
    |       |       |       CallPrediction.php
    |       |       |       CallTimesPrediction.php
    |       |       |       NoCallsPrediction.php
    |       |       |       PredictionInterface.php
    |       |       |       
    |       |       +---Promise
    |       |       |       CallbackPromise.php
    |       |       |       PromiseInterface.php
    |       |       |       ReturnArgumentPromise.php
    |       |       |       ReturnPromise.php
    |       |       |       ThrowPromise.php
    |       |       |       
    |       |       +---Prophecy
    |       |       |       MethodProphecy.php
    |       |       |       ObjectProphecy.php
    |       |       |       ProphecyInterface.php
    |       |       |       ProphecySubjectInterface.php
    |       |       |       Revealer.php
    |       |       |       RevealerInterface.php
    |       |       |       
    |       |       \---Util
    |       |               ExportUtil.php
    |       |               StringUtil.php
    |       |               
    |       \---tests
    |           \---Doubler
    |               \---Generator
    |                       ClassMirrorTest.php
    |                       
    +---phpunit
    |   +---php-code-coverage
    |   |   |   .gitattributes
    |   |   |   .gitignore
    |   |   |   .php_cs
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   ChangeLog-2.2.md
    |   |   |   ChangeLog-3.0.md
    |   |   |   ChangeLog-3.1.md
    |   |   |   ChangeLog-3.2.md
    |   |   |   ChangeLog-3.3.md
    |   |   |   ChangeLog-4.0.md
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml
    |   |   |   README.md
    |   |   |   
    |   |   +---.github
    |   |   |       CONTRIBUTING.md
    |   |   |       ISSUE_TEMPLATE.md
    |   |   |       
    |   |   +---src
    |   |   |   |   CodeCoverage.php
    |   |   |   |   Filter.php
    |   |   |   |   Util.php
    |   |   |   |   
    |   |   |   +---Driver
    |   |   |   |       Driver.php
    |   |   |   |       HHVM.php
    |   |   |   |       PHPDBG.php
    |   |   |   |       Xdebug.php
    |   |   |   |       
    |   |   |   +---Exception
    |   |   |   |       CoveredCodeNotExecutedException.php
    |   |   |   |       Exception.php
    |   |   |   |       InvalidArgumentException.php
    |   |   |   |       MissingCoversAnnotationException.php
    |   |   |   |       RuntimeException.php
    |   |   |   |       UnintentionallyCoveredCodeException.php
    |   |   |   |       
    |   |   |   +---Node
    |   |   |   |       AbstractNode.php
    |   |   |   |       Builder.php
    |   |   |   |       Directory.php
    |   |   |   |       File.php
    |   |   |   |       Iterator.php
    |   |   |   |       
    |   |   |   \---Report
    |   |   |       |   Clover.php
    |   |   |       |   Crap4j.php
    |   |   |       |   PHP.php
    |   |   |       |   Text.php
    |   |   |       |   
    |   |   |       +---Html
    |   |   |       |   |   Facade.php
    |   |   |       |   |   Renderer.php
    |   |   |       |   |   
    |   |   |       |   \---Renderer
    |   |   |       |       |   Dashboard.php
    |   |   |       |       |   Directory.php
    |   |   |       |       |   File.php
    |   |   |       |       |   
    |   |   |       |       \---Template
    |   |   |       |           |   coverage_bar.html.dist
    |   |   |       |           |   dashboard.html.dist
    |   |   |       |           |   directory.html.dist
    |   |   |       |           |   directory_item.html.dist
    |   |   |       |           |   file.html.dist
    |   |   |       |           |   file_item.html.dist
    |   |   |       |           |   method_item.html.dist
    |   |   |       |           |   
    |   |   |       |           +---css
    |   |   |       |           |       bootstrap.min.css
    |   |   |       |           |       nv.d3.min.css
    |   |   |       |           |       style.css
    |   |   |       |           |       
    |   |   |       |           +---fonts
    |   |   |       |           |       glyphicons-halflings-regular.eot
    |   |   |       |           |       glyphicons-halflings-regular.svg
    |   |   |       |           |       glyphicons-halflings-regular.ttf
    |   |   |       |           |       glyphicons-halflings-regular.woff
    |   |   |       |           |       glyphicons-halflings-regular.woff2
    |   |   |       |           |       
    |   |   |       |           \---js
    |   |   |       |                   bootstrap.min.js
    |   |   |       |                   d3.min.js
    |   |   |       |                   holder.min.js
    |   |   |       |                   html5shiv.min.js
    |   |   |       |                   jquery.min.js
    |   |   |       |                   nv.d3.min.js
    |   |   |       |                   respond.min.js
    |   |   |       |                   
    |   |   |       \---Xml
    |   |   |               Coverage.php
    |   |   |               Directory.php
    |   |   |               Facade.php
    |   |   |               File.php
    |   |   |               Method.php
    |   |   |               Node.php
    |   |   |               Project.php
    |   |   |               Report.php
    |   |   |               Tests.php
    |   |   |               Totals.php
    |   |   |               Unit.php
    |   |   |               
    |   |   \---tests
    |   |       |   bootstrap.php
    |   |       |   TestCase.php
    |   |       |   
    |   |       +---tests
    |   |       |       BuilderTest.php
    |   |       |       CloverTest.php
    |   |       |       CodeCoverageTest.php
    |   |       |       Crap4jTest.php
    |   |       |       FilterTest.php
    |   |       |       HTMLTest.php
    |   |       |       TextTest.php
    |   |       |       UtilTest.php
    |   |       |       XMLTest.php
    |   |       |       
    |   |       \---_files
    |   |           |   BankAccount-clover.xml
    |   |           |   BankAccount-crap4j.xml
    |   |           |   BankAccount-text.txt
    |   |           |   BankAccount.php
    |   |           |   BankAccountTest.php
    |   |           |   class-with-anonymous-function-clover.xml
    |   |           |   class-with-anonymous-function-crap4j.xml
    |   |           |   class-with-anonymous-function-text.txt
    |   |           |   CoverageClassExtendedTest.php
    |   |           |   CoverageClassTest.php
    |   |           |   CoverageFunctionParenthesesTest.php
    |   |           |   CoverageFunctionParenthesesWhitespaceTest.php
    |   |           |   CoverageFunctionTest.php
    |   |           |   CoverageMethodOneLineAnnotationTest.php
    |   |           |   CoverageMethodParenthesesTest.php
    |   |           |   CoverageMethodParenthesesWhitespaceTest.php
    |   |           |   CoverageMethodTest.php
    |   |           |   CoverageNoneTest.php
    |   |           |   CoverageNothingTest.php
    |   |           |   CoverageNotPrivateTest.php
    |   |           |   CoverageNotProtectedTest.php
    |   |           |   CoverageNotPublicTest.php
    |   |           |   CoveragePrivateTest.php
    |   |           |   CoverageProtectedTest.php
    |   |           |   CoveragePublicTest.php
    |   |           |   CoverageTwoDefaultClassAnnotations.php
    |   |           |   CoveredClass.php
    |   |           |   CoveredFunction.php
    |   |           |   ignored-lines-clover.xml
    |   |           |   ignored-lines-crap4j.xml
    |   |           |   ignored-lines-text.txt
    |   |           |   NamespaceCoverageClassExtendedTest.php
    |   |           |   NamespaceCoverageClassTest.php
    |   |           |   NamespaceCoverageCoversClassPublicTest.php
    |   |           |   NamespaceCoverageCoversClassTest.php
    |   |           |   NamespaceCoverageMethodTest.php
    |   |           |   NamespaceCoverageNotPrivateTest.php
    |   |           |   NamespaceCoverageNotProtectedTest.php
    |   |           |   NamespaceCoverageNotPublicTest.php
    |   |           |   NamespaceCoveragePrivateTest.php
    |   |           |   NamespaceCoverageProtectedTest.php
    |   |           |   NamespaceCoveragePublicTest.php
    |   |           |   NamespaceCoveredClass.php
    |   |           |   NotExistingCoveredElementTest.php
    |   |           |   source_without_ignore.php
    |   |           |   source_without_namespace.php
    |   |           |   source_with_class_and_anonymous_function.php
    |   |           |   source_with_ignore.php
    |   |           |   source_with_namespace.php
    |   |           |   source_with_oneline_annotations.php
    |   |           |   
    |   |           \---Report
    |   |               +---HTML
    |   |               |   +---CoverageForBankAccount
    |   |               |   |       BankAccount.php.html
    |   |               |   |       dashboard.html
    |   |               |   |       index.html
    |   |               |   |       
    |   |               |   +---CoverageForClassWithAnonymousFunction
    |   |               |   |       dashboard.html
    |   |               |   |       index.html
    |   |               |   |       source_with_class_and_anonymous_function.php.html
    |   |               |   |       
    |   |               |   \---CoverageForFileWithIgnoredLines
    |   |               |           dashboard.html
    |   |               |           index.html
    |   |               |           source_with_ignore.php.html
    |   |               |           
    |   |               \---XML
    |   |                   +---CoverageForBankAccount
    |   |                   |       BankAccount.php.xml
    |   |                   |       index.xml
    |   |                   |       
    |   |                   +---CoverageForClassWithAnonymousFunction
    |   |                   |       index.xml
    |   |                   |       source_with_class_and_anonymous_function.php.xml
    |   |                   |       
    |   |                   \---CoverageForFileWithIgnoredLines
    |   |                           index.xml
    |   |                           source_with_ignore.php.xml
    |   |                           
    |   +---php-file-iterator
    |   |   |   .gitattributes
    |   |   |   .gitignore
    |   |   |   ChangeLog.md
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   README.md
    |   |   |   
    |   |   \---src
    |   |           Facade.php
    |   |           Factory.php
    |   |           Iterator.php
    |   |           
    |   +---php-text-template
    |   |   |   .gitattributes
    |   |   |   .gitignore
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   README.md
    |   |   |   
    |   |   \---src
    |   |           Template.php
    |   |           
    |   +---php-timer
    |   |   |   .gitattributes
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Timer.php
    |   |   |       
    |   |   \---tests
    |   |           TimerTest.php
    |   |           
    |   +---php-token-stream
    |   |   |   .gitattributes
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   README.md
    |   |   |   
    |   |   +---build
    |   |   |       phpunit.xml
    |   |   |       
    |   |   +---src
    |   |   |   |   Token.php
    |   |   |   |   
    |   |   |   \---Token
    |   |   |       |   Stream.php
    |   |   |       |   
    |   |   |       \---Stream
    |   |   |               CachingFactory.php
    |   |   |               
    |   |   \---tests
    |   |       |   bootstrap.php
    |   |       |   TokenTest.php
    |   |       |   
    |   |       +---Token
    |   |       |       ClassTest.php
    |   |       |       ClosureTest.php
    |   |       |       FunctionTest.php
    |   |       |       IncludeTest.php
    |   |       |       InterfaceTest.php
    |   |       |       NamespaceTest.php
    |   |       |       
    |   |       \---_fixture
    |   |               classExtendsNamespacedClass.php
    |   |               classInNamespace.php
    |   |               classInScopedNamespace.php
    |   |               classUsesNamespacedFunction.php
    |   |               class_with_method_that_declares_anonymous_class.php
    |   |               class_with_method_that_declares_anonymous_class2.php
    |   |               closure.php
    |   |               issue19.php
    |   |               issue30.php
    |   |               multipleNamespacesWithOneClassUsingBraces.php
    |   |               multipleNamespacesWithOneClassUsingNonBraceSyntax.php
    |   |               source.php
    |   |               source2.php
    |   |               source3.php
    |   |               source4.php
    |   |               source5.php
    |   |               
    |   +---phpunit
    |   |   |   .gitattributes
    |   |   |   .gitignore
    |   |   |   .php_cs
    |   |   |   .stickler.yml
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   ChangeLog-4.0.md
    |   |   |   ChangeLog-4.1.md
    |   |   |   ChangeLog-4.2.md
    |   |   |   ChangeLog-4.3.md
    |   |   |   ChangeLog-4.4.md
    |   |   |   ChangeLog-4.5.md
    |   |   |   ChangeLog-4.6.md
    |   |   |   ChangeLog-4.7.md
    |   |   |   ChangeLog-4.8.md
    |   |   |   ChangeLog-5.0.md
    |   |   |   ChangeLog-5.1.md
    |   |   |   ChangeLog-5.2.md
    |   |   |   ChangeLog-5.3.md
    |   |   |   ChangeLog-5.4.md
    |   |   |   ChangeLog-5.5.md
    |   |   |   ChangeLog-5.6.md
    |   |   |   ChangeLog-5.7.md
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit
    |   |   |   phpunit.xml
    |   |   |   phpunit.xsd
    |   |   |   README.md
    |   |   |   
    |   |   +---.github
    |   |   |       CODE_OF_CONDUCT.md
    |   |   |       CONTRIBUTING.md
    |   |   |       ISSUE_TEMPLATE.md
    |   |   |       
    |   |   +---build
    |   |   |   |   binary-phar-autoload.php.in
    |   |   |   |   ca.pem
    |   |   |   |   library-phar-autoload.php.in
    |   |   |   |   phar-manifest.php
    |   |   |   |   phar-version.php
    |   |   |   |   phpcs.xml
    |   |   |   |   phpdox.xml
    |   |   |   |   phpmd.xml
    |   |   |   |   travis-ci-fail.xml
    |   |   |   |   version.php
    |   |   |   |   
    |   |   |   \---tools
    |   |   |           composer
    |   |   |           phpab
    |   |   |           phpcs
    |   |   |           phpdox
    |   |   |           phploc
    |   |   |           phpmd
    |   |   |           
    |   |   +---src
    |   |   |   |   Exception.php
    |   |   |   |   
    |   |   |   +---Extensions
    |   |   |   |       GroupTestSuite.php
    |   |   |   |       PhptTestCase.php
    |   |   |   |       PhptTestSuite.php
    |   |   |   |       RepeatedTest.php
    |   |   |   |       TestDecorator.php
    |   |   |   |       TicketListener.php
    |   |   |   |       
    |   |   |   +---ForwardCompatibility
    |   |   |   |       Assert.php
    |   |   |   |       BaseTestListener.php
    |   |   |   |       TestCase.php
    |   |   |   |       TestListener.php
    |   |   |   |       
    |   |   |   +---Framework
    |   |   |   |   |   Assert.php
    |   |   |   |   |   AssertionFailedError.php
    |   |   |   |   |   BaseTestListener.php
    |   |   |   |   |   CodeCoverageException.php
    |   |   |   |   |   Constraint.php
    |   |   |   |   |   CoveredCodeNotExecutedException.php
    |   |   |   |   |   Error.php
    |   |   |   |   |   Exception.php
    |   |   |   |   |   ExceptionWrapper.php
    |   |   |   |   |   ExpectationFailedException.php
    |   |   |   |   |   IncompleteTest.php
    |   |   |   |   |   IncompleteTestCase.php
    |   |   |   |   |   IncompleteTestError.php
    |   |   |   |   |   InvalidCoversTargetException.php
    |   |   |   |   |   MissingCoversAnnotationException.php
    |   |   |   |   |   OutputError.php
    |   |   |   |   |   RiskyTest.php
    |   |   |   |   |   RiskyTestError.php
    |   |   |   |   |   SelfDescribing.php
    |   |   |   |   |   SkippedTest.php
    |   |   |   |   |   SkippedTestCase.php
    |   |   |   |   |   SkippedTestError.php
    |   |   |   |   |   SkippedTestSuiteError.php
    |   |   |   |   |   SyntheticError.php
    |   |   |   |   |   Test.php
    |   |   |   |   |   TestCase.php
    |   |   |   |   |   TestFailure.php
    |   |   |   |   |   TestListener.php
    |   |   |   |   |   TestResult.php
    |   |   |   |   |   TestSuite.php
    |   |   |   |   |   UnintentionallyCoveredCodeError.php
    |   |   |   |   |   Warning.php
    |   |   |   |   |   WarningTestCase.php
    |   |   |   |   |   
    |   |   |   |   +---Assert
    |   |   |   |   |       Functions.php
    |   |   |   |   |       
    |   |   |   |   +---Constraint
    |   |   |   |   |   |   And.php
    |   |   |   |   |   |   ArrayHasKey.php
    |   |   |   |   |   |   ArraySubset.php
    |   |   |   |   |   |   Attribute.php
    |   |   |   |   |   |   Callback.php
    |   |   |   |   |   |   ClassHasAttribute.php
    |   |   |   |   |   |   ClassHasStaticAttribute.php
    |   |   |   |   |   |   Composite.php
    |   |   |   |   |   |   Count.php
    |   |   |   |   |   |   DirectoryExists.php
    |   |   |   |   |   |   Exception.php
    |   |   |   |   |   |   ExceptionCode.php
    |   |   |   |   |   |   ExceptionMessage.php
    |   |   |   |   |   |   ExceptionMessageRegExp.php
    |   |   |   |   |   |   FileExists.php
    |   |   |   |   |   |   GreaterThan.php
    |   |   |   |   |   |   IsAnything.php
    |   |   |   |   |   |   IsEmpty.php
    |   |   |   |   |   |   IsEqual.php
    |   |   |   |   |   |   IsFalse.php
    |   |   |   |   |   |   IsFinite.php
    |   |   |   |   |   |   IsIdentical.php
    |   |   |   |   |   |   IsInfinite.php
    |   |   |   |   |   |   IsInstanceOf.php
    |   |   |   |   |   |   IsJson.php
    |   |   |   |   |   |   IsNan.php
    |   |   |   |   |   |   IsNull.php
    |   |   |   |   |   |   IsReadable.php
    |   |   |   |   |   |   IsTrue.php
    |   |   |   |   |   |   IsType.php
    |   |   |   |   |   |   IsWritable.php
    |   |   |   |   |   |   JsonMatches.php
    |   |   |   |   |   |   LessThan.php
    |   |   |   |   |   |   Not.php
    |   |   |   |   |   |   ObjectHasAttribute.php
    |   |   |   |   |   |   Or.php
    |   |   |   |   |   |   PCREMatch.php
    |   |   |   |   |   |   SameSize.php
    |   |   |   |   |   |   StringContains.php
    |   |   |   |   |   |   StringEndsWith.php
    |   |   |   |   |   |   StringMatches.php
    |   |   |   |   |   |   StringStartsWith.php
    |   |   |   |   |   |   TraversableContains.php
    |   |   |   |   |   |   TraversableContainsOnly.php
    |   |   |   |   |   |   Xor.php
    |   |   |   |   |   |   
    |   |   |   |   |   \---JsonMatches
    |   |   |   |   |           ErrorMessageProvider.php
    |   |   |   |   |           
    |   |   |   |   +---Error
    |   |   |   |   |       Deprecated.php
    |   |   |   |   |       Notice.php
    |   |   |   |   |       Warning.php
    |   |   |   |   |       
    |   |   |   |   \---TestSuite
    |   |   |   |           DataProvider.php
    |   |   |   |           
    |   |   |   +---Runner
    |   |   |   |   |   BaseTestRunner.php
    |   |   |   |   |   Exception.php
    |   |   |   |   |   StandardTestSuiteLoader.php
    |   |   |   |   |   TestSuiteLoader.php
    |   |   |   |   |   Version.php
    |   |   |   |   |   
    |   |   |   |   \---Filter
    |   |   |   |       |   Factory.php
    |   |   |   |       |   Group.php
    |   |   |   |       |   Test.php
    |   |   |   |       |   
    |   |   |   |       \---Group
    |   |   |   |               Exclude.php
    |   |   |   |               Include.php
    |   |   |   |               
    |   |   |   +---TextUI
    |   |   |   |       Command.php
    |   |   |   |       ResultPrinter.php
    |   |   |   |       TestRunner.php
    |   |   |   |       
    |   |   |   \---Util
    |   |   |       |   Blacklist.php
    |   |   |       |   Configuration.php
    |   |   |       |   ConfigurationGenerator.php
    |   |   |       |   ErrorHandler.php
    |   |   |       |   Fileloader.php
    |   |   |       |   Filesystem.php
    |   |   |       |   Filter.php
    |   |   |       |   Getopt.php
    |   |   |       |   GlobalState.php
    |   |   |       |   InvalidArgumentHelper.php
    |   |   |       |   PHP.php
    |   |   |       |   Printer.php
    |   |   |       |   Regex.php
    |   |   |       |   String.php
    |   |   |       |   Test.php
    |   |   |       |   TestSuiteIterator.php
    |   |   |       |   Type.php
    |   |   |       |   XML.php
    |   |   |       |   
    |   |   |       +---Log
    |   |   |       |       JSON.php
    |   |   |       |       JUnit.php
    |   |   |       |       TAP.php
    |   |   |       |       TeamCity.php
    |   |   |       |       
    |   |   |       +---PHP
    |   |   |       |   |   Default.php
    |   |   |       |   |   eval-stdin.php
    |   |   |       |   |   Windows.php
    |   |   |       |   |   
    |   |   |       |   \---Template
    |   |   |       |           TestCaseMethod.tpl.dist
    |   |   |       |           
    |   |   |       \---TestDox
    |   |   |           |   NamePrettifier.php
    |   |   |           |   ResultPrinter.php
    |   |   |           |   
    |   |   |           \---ResultPrinter
    |   |   |                   HTML.php
    |   |   |                   Text.php
    |   |   |                   XML.php
    |   |   |                   
    |   |   \---tests
    |   |       |   bootstrap.php
    |   |       |   
    |   |       +---Extensions
    |   |       |       PhptTestCaseTest.php
    |   |       |       RepeatedTestTest.php
    |   |       |       
    |   |       +---Fail
    |   |       |       fail.phpt
    |   |       |       
    |   |       +---Framework
    |   |       |   |   AssertTest.php
    |   |       |   |   BaseTestListenerTest.php
    |   |       |   |   ConstraintTest.php
    |   |       |   |   SuiteTest.php
    |   |       |   |   TestCaseTest.php
    |   |       |   |   TestFailureTest.php
    |   |       |   |   TestImplementorTest.php
    |   |       |   |   TestListenerTest.php
    |   |       |   |   
    |   |       |   \---Constraint
    |   |       |       |   ArraySubsetTest.php
    |   |       |       |   CountTest.php
    |   |       |       |   ExceptionMessageRegExpTest.php
    |   |       |       |   ExceptionMessageTest.php
    |   |       |       |   IsJsonTest.php
    |   |       |       |   JsonMatchesTest.php
    |   |       |       |   
    |   |       |       \---JsonMatches
    |   |       |               ErrorMessageProviderTest.php
    |   |       |               
    |   |       +---Regression
    |   |       |   +---GitHub
    |   |       |   |   |   1149.phpt
    |   |       |   |   |   1216.phpt
    |   |       |   |   |   1265.phpt
    |   |       |   |   |   1330.phpt
    |   |       |   |   |   1335.phpt
    |   |       |   |   |   1337.phpt
    |   |       |   |   |   1348.phpt
    |   |       |   |   |   1351.phpt
    |   |       |   |   |   1374.phpt
    |   |       |   |   |   1437.phpt
    |   |       |   |   |   1468.phpt
    |   |       |   |   |   1471.phpt
    |   |       |   |   |   1472.phpt
    |   |       |   |   |   1570.phpt
    |   |       |   |   |   2137-filter.phpt
    |   |       |   |   |   2137-no_filter.phpt
    |   |       |   |   |   2145.phpt
    |   |       |   |   |   2158.phpt
    |   |       |   |   |   2366.phpt
    |   |       |   |   |   2380.phpt
    |   |       |   |   |   2382.phpt
    |   |       |   |   |   2435.phpt
    |   |       |   |   |   244.phpt
    |   |       |   |   |   322.phpt
    |   |       |   |   |   433.phpt
    |   |       |   |   |   445.phpt
    |   |       |   |   |   498.phpt
    |   |       |   |   |   503.phpt
    |   |       |   |   |   581.phpt
    |   |       |   |   |   74.phpt
    |   |       |   |   |   765.phpt
    |   |       |   |   |   797.phpt
    |   |       |   |   |   863.phpt
    |   |       |   |   |   873-php5.phpt
    |   |       |   |   |   873-php7.phpt
    |   |       |   |   |   
    |   |       |   |   +---1149
    |   |       |   |   |       Issue1149Test.php
    |   |       |   |   |       
    |   |       |   |   +---1216
    |   |       |   |   |       bootstrap1216.php
    |   |       |   |   |       Issue1216Test.php
    |   |       |   |   |       phpunit1216.xml
    |   |       |   |   |       
    |   |       |   |   +---1265
    |   |       |   |   |       Issue1265Test.php
    |   |       |   |   |       phpunit1265.xml
    |   |       |   |   |       
    |   |       |   |   +---1330
    |   |       |   |   |       Issue1330Test.php
    |   |       |   |   |       phpunit1330.xml
    |   |       |   |   |       
    |   |       |   |   +---1335
    |   |       |   |   |       bootstrap1335.php
    |   |       |   |   |       Issue1335Test.php
    |   |       |   |   |       
    |   |       |   |   +---1337
    |   |       |   |   |       Issue1337Test.php
    |   |       |   |   |       
    |   |       |   |   +---1348
    |   |       |   |   |       Issue1348Test.php
    |   |       |   |   |       
    |   |       |   |   +---1351
    |   |       |   |   |       ChildProcessClass1351.php
    |   |       |   |   |       Issue1351Test.php
    |   |       |   |   |       
    |   |       |   |   +---1374
    |   |       |   |   |       Issue1374Test.php
    |   |       |   |   |       
    |   |       |   |   +---1437
    |   |       |   |   |       Issue1437Test.php
    |   |       |   |   |       
    |   |       |   |   +---1468
    |   |       |   |   |       Issue1468Test.php
    |   |       |   |   |       
    |   |       |   |   +---1471
    |   |       |   |   |       Issue1471Test.php
    |   |       |   |   |       
    |   |       |   |   +---1472
    |   |       |   |   |       Issue1472Test.php
    |   |       |   |   |       
    |   |       |   |   +---1570
    |   |       |   |   |       Issue1570Test.php
    |   |       |   |   |       
    |   |       |   |   +---2137
    |   |       |   |   |       Issue2137Test.php
    |   |       |   |   |       
    |   |       |   |   +---2145
    |   |       |   |   |       Issue2145Test.php
    |   |       |   |   |       
    |   |       |   |   +---2158
    |   |       |   |   |       constant.inc
    |   |       |   |   |       Issue2158Test.php
    |   |       |   |   |       
    |   |       |   |   +---2299
    |   |       |   |   |       Issue2299Test.php
    |   |       |   |   |       
    |   |       |   |   +---2366
    |   |       |   |   |       Issue2366Test.php
    |   |       |   |   |       
    |   |       |   |   +---2380
    |   |       |   |   |       Issue2380Test.php
    |   |       |   |   |       
    |   |       |   |   +---2382
    |   |       |   |   |       Issue2382Test.php
    |   |       |   |   |       
    |   |       |   |   +---2435
    |   |       |   |   |       Issue2435Test.php
    |   |       |   |   |       
    |   |       |   |   +---244
    |   |       |   |   |       Issue244Test.php
    |   |       |   |   |       
    |   |       |   |   +---322
    |   |       |   |   |       Issue322Test.php
    |   |       |   |   |       phpunit322.xml
    |   |       |   |   |       
    |   |       |   |   +---433
    |   |       |   |   |       Issue433Test.php
    |   |       |   |   |       
    |   |       |   |   +---445
    |   |       |   |   |       Issue445Test.php
    |   |       |   |   |       
    |   |       |   |   +---498
    |   |       |   |   |       Issue498Test.php
    |   |       |   |   |       
    |   |       |   |   +---503
    |   |       |   |   |       Issue503Test.php
    |   |       |   |   |       
    |   |       |   |   +---581
    |   |       |   |   |       Issue581Test.php
    |   |       |   |   |       
    |   |       |   |   +---74
    |   |       |   |   |       Issue74Test.php
    |   |       |   |   |       NewException.php
    |   |       |   |   |       
    |   |       |   |   +---765
    |   |       |   |   |       Issue765Test.php
    |   |       |   |   |       
    |   |       |   |   +---797
    |   |       |   |   |       bootstrap797.php
    |   |       |   |   |       Issue797Test.php
    |   |       |   |   |       
    |   |       |   |   \---873
    |   |       |   |           Issue873Test.php
    |   |       |   |           
    |   |       |   \---Trac
    |   |       |       |   1021.phpt
    |   |       |       |   523.phpt
    |   |       |       |   578.phpt
    |   |       |       |   684.phpt
    |   |       |       |   783.phpt
    |   |       |       |   
    |   |       |       +---1021
    |   |       |       |       Issue1021Test.php
    |   |       |       |       
    |   |       |       +---523
    |   |       |       |       Issue523Test.php
    |   |       |       |       
    |   |       |       +---578
    |   |       |       |       Issue578Test.php
    |   |       |       |       
    |   |       |       +---684
    |   |       |       |       Issue684Test.php
    |   |       |       |       
    |   |       |       \---783
    |   |       |               ChildSuite.php
    |   |       |               OneTest.php
    |   |       |               ParentSuite.php
    |   |       |               TwoTest.php
    |   |       |               
    |   |       +---Runner
    |   |       |       BaseTestRunnerTest.php
    |   |       |       
    |   |       +---TextUI
    |   |       |   |   abstract-test-class.phpt
    |   |       |   |   assertion.phpt
    |   |       |   |   code-coverage-ignore.phpt
    |   |       |   |   colors-always.phpt
    |   |       |   |   concrete-test-class.phpt
    |   |       |   |   custom-printer-debug.phpt
    |   |       |   |   custom-printer-verbose.phpt
    |   |       |   |   dataprovider-debug.phpt
    |   |       |   |   dataprovider-log-xml-isolation.phpt
    |   |       |   |   dataprovider-log-xml.phpt
    |   |       |   |   dataprovider-testdox.phpt
    |   |       |   |   debug.phpt
    |   |       |   |   default-isolation.phpt
    |   |       |   |   default.phpt
    |   |       |   |   dependencies-clone.phpt
    |   |       |   |   dependencies-isolation.phpt
    |   |       |   |   dependencies.phpt
    |   |       |   |   dependencies2-isolation.phpt
    |   |       |   |   dependencies2.phpt
    |   |       |   |   dependencies3-isolation.phpt
    |   |       |   |   dependencies3.phpt
    |   |       |   |   disable-code-coverage-ignore.phpt
    |   |       |   |   empty-testcase.phpt
    |   |       |   |   exception-stack.phpt
    |   |       |   |   exclude-group-isolation.phpt
    |   |       |   |   exclude-group.phpt
    |   |       |   |   failure-isolation.phpt
    |   |       |   |   failure-reverse-list.phpt
    |   |       |   |   failure.phpt
    |   |       |   |   fatal-isolation.phpt
    |   |       |   |   filter-class-isolation.phpt
    |   |       |   |   filter-class.phpt
    |   |       |   |   filter-dataprovider-by-classname-and-range-isolation.phpt
    |   |       |   |   filter-dataprovider-by-classname-and-range.phpt
    |   |       |   |   filter-dataprovider-by-number-isolation.phpt
    |   |       |   |   filter-dataprovider-by-number.phpt
    |   |       |   |   filter-dataprovider-by-only-range-isolation.phpt
    |   |       |   |   filter-dataprovider-by-only-range.phpt
    |   |       |   |   filter-dataprovider-by-only-regexp-isolation.phpt
    |   |       |   |   filter-dataprovider-by-only-regexp.phpt
    |   |       |   |   filter-dataprovider-by-only-string-isolation.phpt
    |   |       |   |   filter-dataprovider-by-only-string.phpt
    |   |       |   |   filter-dataprovider-by-range-isolation.phpt
    |   |       |   |   filter-dataprovider-by-range.phpt
    |   |       |   |   filter-dataprovider-by-regexp-isolation.phpt
    |   |       |   |   filter-dataprovider-by-regexp.phpt
    |   |       |   |   filter-dataprovider-by-string-isolation.phpt
    |   |       |   |   filter-dataprovider-by-string.phpt
    |   |       |   |   filter-method-case-insensitive.phpt
    |   |       |   |   filter-method-case-sensitive-no-result.phpt
    |   |       |   |   filter-method-isolation.phpt
    |   |       |   |   filter-method.phpt
    |   |       |   |   filter-no-results.phpt
    |   |       |   |   forward-compatibility.phpt
    |   |       |   |   group-isolation.phpt
    |   |       |   |   group.phpt
    |   |       |   |   help.phpt
    |   |       |   |   help2.phpt
    |   |       |   |   ini-isolation.phpt
    |   |       |   |   list-groups.phpt
    |   |       |   |   list-suites.phpt
    |   |       |   |   log-json-post-66021.phpt
    |   |       |   |   log-junit.phpt
    |   |       |   |   log-tap.phpt
    |   |       |   |   log-teamcity.phpt
    |   |       |   |   mycommand.phpt
    |   |       |   |   options-after-arguments.phpt
    |   |       |   |   output-isolation.phpt
    |   |       |   |   phar-extension-suppressed.phpt
    |   |       |   |   phar-extension.phpt
    |   |       |   |   phpt-args.phpt
    |   |       |   |   phpt-env.phpt
    |   |       |   |   phpt-external.phpt
    |   |       |   |   phpt-stderr.phpt
    |   |       |   |   phpt-stdin.phpt
    |   |       |   |   phpt-xfail.phpt
    |   |       |   |   repeat.phpt
    |   |       |   |   report-useless-tests-incomplete.phpt
    |   |       |   |   report-useless-tests-isolation.phpt
    |   |       |   |   report-useless-tests.phpt
    |   |       |   |   stop-on-warning-via-cli.phpt
    |   |       |   |   stop-on-warning-via-config.phpt
    |   |       |   |   tap.phpt
    |   |       |   |   teamcity.phpt
    |   |       |   |   test-suffix-multiple.phpt
    |   |       |   |   test-suffix-single.phpt
    |   |       |   |   testdox-exclude-group.phpt
    |   |       |   |   testdox-group.phpt
    |   |       |   |   testdox-html.phpt
    |   |       |   |   testdox-text.phpt
    |   |       |   |   testdox-xml.phpt
    |   |       |   |   testdox.phpt
    |   |       |   |   
    |   |       |   \---_files
    |   |       |           expect_external.txt
    |   |       |           phpt-env.expected.txt
    |   |       |           phpt_external.php
    |   |       |           
    |   |       +---Util
    |   |       |   |   ConfigurationTest.php
    |   |       |   |   GetoptTest.php
    |   |       |   |   GlobalStateTest.php
    |   |       |   |   PHPTest.php
    |   |       |   |   RegexTest.php
    |   |       |   |   TestTest.php
    |   |       |   |   XMLTest.php
    |   |       |   |   
    |   |       |   \---TestDox
    |   |       |           NamePrettifierTest.php
    |   |       |           
    |   |       \---_files
    |   |           |   AbstractTest.php
    |   |           |   ArrayAccessible.php
    |   |           |   AssertionExample.php
    |   |           |   AssertionExampleTest.php
    |   |           |   Author.php
    |   |           |   BankAccount.php
    |   |           |   BankAccountTest.php
    |   |           |   BankAccountTest.test.php
    |   |           |   BankAccountTest2.php
    |   |           |   bar.xml
    |   |           |   BaseTestListenerSample.php
    |   |           |   BeforeAndAfterTest.php
    |   |           |   BeforeClassAndAfterClassTest.php
    |   |           |   BeforeClassWithOnlyDataProviderTest.php
    |   |           |   Book.php
    |   |           |   Calculator.php
    |   |           |   ChangeCurrentWorkingDirectoryTest.php
    |   |           |   ClassWithNonPublicAttributes.php
    |   |           |   ClassWithScalarTypeDeclarations.php
    |   |           |   ClassWithToString.php
    |   |           |   ClonedDependencyTest.php
    |   |           |   ConcreteTest.my.php
    |   |           |   ConcreteTest.php
    |   |           |   configuration.colors.empty.xml
    |   |           |   configuration.colors.false.xml
    |   |           |   configuration.colors.invalid.xml
    |   |           |   configuration.colors.true.xml
    |   |           |   configuration.custom-printer.xml
    |   |           |   configuration.suites.xml
    |   |           |   configuration.xml
    |   |           |   configuration_empty.xml
    |   |           |   configuration_stop_on_warning.xml
    |   |           |   configuration_xinclude.xml
    |   |           |   CoverageClassExtendedTest.php
    |   |           |   CoverageClassTest.php
    |   |           |   CoverageFunctionParenthesesTest.php
    |   |           |   CoverageFunctionParenthesesWhitespaceTest.php
    |   |           |   CoverageFunctionTest.php
    |   |           |   CoverageMethodOneLineAnnotationTest.php
    |   |           |   CoverageMethodParenthesesTest.php
    |   |           |   CoverageMethodParenthesesWhitespaceTest.php
    |   |           |   CoverageMethodTest.php
    |   |           |   CoverageNamespacedFunctionTest.php
    |   |           |   CoverageNoneTest.php
    |   |           |   CoverageNothingTest.php
    |   |           |   CoverageNotPrivateTest.php
    |   |           |   CoverageNotProtectedTest.php
    |   |           |   CoverageNotPublicTest.php
    |   |           |   CoveragePrivateTest.php
    |   |           |   CoverageProtectedTest.php
    |   |           |   CoveragePublicTest.php
    |   |           |   CoverageTwoDefaultClassAnnotations.php
    |   |           |   CoveredClass.php
    |   |           |   CoveredFunction.php
    |   |           |   CustomPrinter.php
    |   |           |   DataProviderDebugTest.php
    |   |           |   DataProviderDependencyTest.php
    |   |           |   DataProviderFilterTest.php
    |   |           |   DataProviderIncompleteTest.php
    |   |           |   DataProviderSkippedTest.php
    |   |           |   DataProviderTest.php
    |   |           |   DataProviderTestDoxTest.php
    |   |           |   DependencyFailureTest.php
    |   |           |   DependencySuccessTest.php
    |   |           |   DependencyTestSuite.php
    |   |           |   DoubleTestCase.php
    |   |           |   DummyException.php
    |   |           |   EmptyTestCaseTest.php
    |   |           |   ExceptionInAssertPostConditionsTest.php
    |   |           |   ExceptionInAssertPreConditionsTest.php
    |   |           |   ExceptionInSetUpTest.php
    |   |           |   ExceptionInTearDownTest.php
    |   |           |   ExceptionInTest.php
    |   |           |   ExceptionNamespaceTest.php
    |   |           |   ExceptionStackTest.php
    |   |           |   ExceptionTest.php
    |   |           |   expectedFileFormat.txt
    |   |           |   Failure.php
    |   |           |   FailureTest.php
    |   |           |   FatalTest.php
    |   |           |   foo.xml
    |   |           |   IgnoreCodeCoverageClass.php
    |   |           |   IgnoreCodeCoverageClassTest.php
    |   |           |   IncompleteTest.php
    |   |           |   InheritedTestCase.php
    |   |           |   IniTest.php
    |   |           |   IsolationTest.php
    |   |           |   Mockable.php
    |   |           |   MockRunner.php
    |   |           |   MultiDependencyTest.php
    |   |           |   MultipleDataProviderTest.php
    |   |           |   MyCommand.php
    |   |           |   NamespaceCoverageClassExtendedTest.php
    |   |           |   NamespaceCoverageClassTest.php
    |   |           |   NamespaceCoverageCoversClassPublicTest.php
    |   |           |   NamespaceCoverageCoversClassTest.php
    |   |           |   NamespaceCoverageMethodTest.php
    |   |           |   NamespaceCoverageNotPrivateTest.php
    |   |           |   NamespaceCoverageNotProtectedTest.php
    |   |           |   NamespaceCoverageNotPublicTest.php
    |   |           |   NamespaceCoveragePrivateTest.php
    |   |           |   NamespaceCoverageProtectedTest.php
    |   |           |   NamespaceCoveragePublicTest.php
    |   |           |   NamespaceCoveredClass.php
    |   |           |   NamespaceCoveredFunction.php
    |   |           |   NoArgTestCaseTest.php
    |   |           |   NonStatic.php
    |   |           |   NoTestCaseClass.php
    |   |           |   NoTestCases.php
    |   |           |   NotExistingCoveredElementTest.php
    |   |           |   NothingTest.php
    |   |           |   NotPublicTestCase.php
    |   |           |   NotVoidTestCase.php
    |   |           |   OneTestCase.php
    |   |           |   OutputTestCase.php
    |   |           |   OverrideTestCase.php
    |   |           |   phpt-for-coverage.phpt
    |   |           |   phpt-xfail.phpt
    |   |           |   RequirementsClassBeforeClassHookTest.php
    |   |           |   RequirementsClassDocBlockTest.php
    |   |           |   RequirementsTest.php
    |   |           |   SampleArrayAccess.php
    |   |           |   SampleClass.php
    |   |           |   Singleton.php
    |   |           |   StackTest.php
    |   |           |   StatusTest.php
    |   |           |   StopOnWarningTestSuite.php
    |   |           |   StopsOnWarningTest.php
    |   |           |   Struct.php
    |   |           |   structureAttributesAreSameButValuesAreNot.xml
    |   |           |   structureExpected.xml
    |   |           |   structureIgnoreTextNodes.xml
    |   |           |   structureIsSameButDataIsNot.xml
    |   |           |   structureWrongNumberOfAttributes.xml
    |   |           |   structureWrongNumberOfNodes.xml
    |   |           |   Success.php
    |   |           |   TemplateMethodsTest.php
    |   |           |   TestAutoreferenced.php
    |   |           |   TestDoxGroupTest.php
    |   |           |   TestGeneratorMaker.php
    |   |           |   TestIncomplete.php
    |   |           |   TestIterator.php
    |   |           |   TestIterator2.php
    |   |           |   TestSkipped.php
    |   |           |   TestTestError.php
    |   |           |   TestWithTest.php
    |   |           |   ThrowExceptionTestCase.php
    |   |           |   ThrowNoExceptionTestCase.php
    |   |           |   WasRun.php
    |   |           |   
    |   |           +---Inheritance
    |   |           |       InheritanceA.php
    |   |           |       InheritanceB.php
    |   |           |       
    |   |           +---JsonData
    |   |           |       arrayObject.json
    |   |           |       simpleObject.json
    |   |           |       
    |   |           \---phpunit-example-extension
    |   |               |   phpunit.xml
    |   |               |   
    |   |               +---tests
    |   |               |       OneTest.php
    |   |               |       
    |   |               \---tools
    |   |                   \---phpunit.d
    |   |                           phpunit-example-extension-1.0.0.phar
    |   |                           
    |   \---phpunit-mock-objects
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .php_cs
    |       |   .travis.yml
    |       |   build.xml
    |       |   composer.json
    |       |   CONTRIBUTING.md
    |       |   LICENSE
    |       |   phpunit.xml
    |       |   README.md
    |       |   
    |       +---build
    |       |       travis-ci.xml
    |       |       
    |       +---src
    |       |   \---Framework
    |       |       \---MockObject
    |       |           |   Generator.php
    |       |           |   Invocation.php
    |       |           |   InvocationMocker.php
    |       |           |   Invokable.php
    |       |           |   Matcher.php
    |       |           |   MockBuilder.php
    |       |           |   MockObject.php
    |       |           |   Stub.php
    |       |           |   Verifiable.php
    |       |           |   
    |       |           +---Builder
    |       |           |       Identity.php
    |       |           |       InvocationMocker.php
    |       |           |       Match.php
    |       |           |       MethodNameMatch.php
    |       |           |       Namespace.php
    |       |           |       ParametersMatch.php
    |       |           |       Stub.php
    |       |           |       
    |       |           +---Exception
    |       |           |       BadMethodCallException.php
    |       |           |       Exception.php
    |       |           |       RuntimeException.php
    |       |           |       
    |       |           +---Generator
    |       |           |       deprecation.tpl.dist
    |       |           |       mocked_class.tpl.dist
    |       |           |       mocked_class_method.tpl.dist
    |       |           |       mocked_clone.tpl.dist
    |       |           |       mocked_method.tpl.dist
    |       |           |       mocked_method_void.tpl.dist
    |       |           |       mocked_static_method.tpl.dist
    |       |           |       proxied_method.tpl.dist
    |       |           |       proxied_method_void.tpl.dist
    |       |           |       trait_class.tpl.dist
    |       |           |       unmocked_clone.tpl.dist
    |       |           |       wsdl_class.tpl.dist
    |       |           |       wsdl_method.tpl.dist
    |       |           |       
    |       |           +---Invocation
    |       |           |       Object.php
    |       |           |       Static.php
    |       |           |       
    |       |           +---Matcher
    |       |           |       AnyInvokedCount.php
    |       |           |       AnyParameters.php
    |       |           |       ConsecutiveParameters.php
    |       |           |       Invocation.php
    |       |           |       InvokedAtIndex.php
    |       |           |       InvokedAtLeastCount.php
    |       |           |       InvokedAtLeastOnce.php
    |       |           |       InvokedAtMostCount.php
    |       |           |       InvokedCount.php
    |       |           |       InvokedRecorder.php
    |       |           |       MethodName.php
    |       |           |       Parameters.php
    |       |           |       StatelessInvocation.php
    |       |           |       
    |       |           \---Stub
    |       |                   ConsecutiveCalls.php
    |       |                   Exception.php
    |       |                   MatcherCollection.php
    |       |                   Return.php
    |       |                   ReturnArgument.php
    |       |                   ReturnCallback.php
    |       |                   ReturnReference.php
    |       |                   ReturnSelf.php
    |       |                   ReturnValueMap.php
    |       |                   
    |       \---tests
    |           |   bootstrap.php
    |           |   GeneratorTest.php
    |           |   MockBuilderTest.php
    |           |   MockObjectTest.php
    |           |   ProxyObjectTest.php
    |           |   
    |           +---MockObject
    |           |   |   class_with_deprecated_method.phpt
    |           |   |   
    |           |   +---Builder
    |           |   |       InvocationMockerTest.php
    |           |   |       
    |           |   +---Generator
    |           |   |       232.phpt
    |           |   |       abstract_class.phpt
    |           |   |       class.phpt
    |           |   |       class_call_parent_clone.phpt
    |           |   |       class_call_parent_constructor.phpt
    |           |   |       class_dont_call_parent_clone.phpt
    |           |   |       class_dont_call_parent_constructor.phpt
    |           |   |       class_implementing_interface_call_parent_constructor.phpt
    |           |   |       class_implementing_interface_dont_call_parent_constructor.phpt
    |           |   |       class_partial.phpt
    |           |   |       class_with_method_named_method.phpt
    |           |   |       class_with_method_with_variadic_arguments.phpt
    |           |   |       interface.phpt
    |           |   |       invocation_object_clone_object.phpt
    |           |   |       namespaced_class.phpt
    |           |   |       namespaced_class_call_parent_clone.phpt
    |           |   |       namespaced_class_call_parent_constructor.phpt
    |           |   |       namespaced_class_dont_call_parent_clone.phpt
    |           |   |       namespaced_class_dont_call_parent_constructor.phpt
    |           |   |       namespaced_class_implementing_interface_call_parent_constructor.phpt
    |           |   |       namespaced_class_implementing_interface_dont_call_parent_constructor.phpt
    |           |   |       namespaced_class_partial.phpt
    |           |   |       namespaced_interface.phpt
    |           |   |       nonexistent_class.phpt
    |           |   |       nonexistent_class_with_namespace.phpt
    |           |   |       nonexistent_class_with_namespace_starting_with_separator.phpt
    |           |   |       nullable_types.phpt
    |           |   |       proxy.phpt
    |           |   |       return_type_declarations_nullable.phpt
    |           |   |       return_type_declarations_object_method.phpt
    |           |   |       return_type_declarations_self.phpt
    |           |   |       return_type_declarations_static_method.phpt
    |           |   |       return_type_declarations_void.phpt
    |           |   |       scalar_type_declarations.phpt
    |           |   |       wsdl_class.phpt
    |           |   |       wsdl_class_namespace.phpt
    |           |   |       wsdl_class_partial.phpt
    |           |   |       
    |           |   +---Invocation
    |           |   |       ObjectTest.php
    |           |   |       StaticTest.php
    |           |   |       
    |           |   \---Matcher
    |           |           ConsecutiveParametersTest.php
    |           |           
    |           \---_fixture
    |                   AbstractMockTestClass.php
    |                   AbstractTrait.php
    |                   AnInterface.php
    |                   AnInterfaceWithReturnType.php
    |                   AnotherInterface.php
    |                   Bar.php
    |                   ClassThatImplementsSerializable.php
    |                   ClassWithSelfTypeHint.php
    |                   ClassWithStaticMethod.php
    |                   Foo.php
    |                   FunctionCallback.php
    |                   GoogleSearch.wsdl
    |                   InterfaceWithSemiReservedMethodName.php
    |                   InterfaceWithStaticMethod.php
    |                   MethodCallback.php
    |                   MethodCallbackByReference.php
    |                   Mockable.php
    |                   MockTestInterface.php
    |                   PartialMockTestClass.php
    |                   SingletonClass.php
    |                   SomeClass.php
    |                   StaticMockTestClass.php
    |                   StringableClass.php
    |                   TraversableMockTestInterface.php
    |                   
    +---psr
    |   \---log
    |       |   .gitignore
    |       |   composer.json
    |       |   LICENSE
    |       |   README.md
    |       |   
    |       \---Psr
    |           \---Log
    |               |   AbstractLogger.php
    |               |   InvalidArgumentException.php
    |               |   LoggerAwareInterface.php
    |               |   LoggerAwareTrait.php
    |               |   LoggerInterface.php
    |               |   LoggerTrait.php
    |               |   LogLevel.php
    |               |   NullLogger.php
    |               |   
    |               \---Test
    |                       LoggerInterfaceTest.php
    |                       
    +---psy
    |   \---psysh
    |       |   .editorconfig
    |       |   .gitignore
    |       |   .php_cs
    |       |   .styleci.yml
    |       |   .travis.yml
    |       |   composer.json
    |       |   CONTRIBUTING.md
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---.phan
    |       |       config.php
    |       |       
    |       +---bin
    |       |       build
    |       |       build-manual
    |       |       build-phar
    |       |       build-vendor
    |       |       build-vendor-compat
    |       |       package
    |       |       psysh
    |       |       
    |       +---src
    |       |   \---Psy
    |       |       |   Autoloader.php
    |       |       |   CodeCleaner.php
    |       |       |   Compiler.php
    |       |       |   ConfigPaths.php
    |       |       |   Configuration.php
    |       |       |   ConsoleColorFactory.php
    |       |       |   Context.php
    |       |       |   ContextAware.php
    |       |       |   functions.php
    |       |       |   ParserFactory.php
    |       |       |   Shell.php
    |       |       |   Sudo.php
    |       |       |   
    |       |       +---CodeCleaner
    |       |       |       AbstractClassPass.php
    |       |       |       AssignThisVariablePass.php
    |       |       |       CalledClassPass.php
    |       |       |       CallTimePassByReferencePass.php
    |       |       |       CodeCleanerPass.php
    |       |       |       ExitPass.php
    |       |       |       FinalClassPass.php
    |       |       |       FunctionReturnInWriteContextPass.php
    |       |       |       ImplicitReturnPass.php
    |       |       |       InstanceOfPass.php
    |       |       |       LeavePsyshAlonePass.php
    |       |       |       LegacyEmptyPass.php
    |       |       |       LoopContextPass.php
    |       |       |       MagicConstantsPass.php
    |       |       |       NamespaceAwarePass.php
    |       |       |       NamespacePass.php
    |       |       |       NoReturnValue.php
    |       |       |       PassableByReferencePass.php
    |       |       |       StaticConstructorPass.php
    |       |       |       StrictTypesPass.php
    |       |       |       UseStatementPass.php
    |       |       |       ValidClassNamePass.php
    |       |       |       ValidConstantPass.php
    |       |       |       ValidFunctionNamePass.php
    |       |       |       
    |       |       +---Command
    |       |       |   |   BufferCommand.php
    |       |       |   |   ClearCommand.php
    |       |       |   |   Command.php
    |       |       |   |   DocCommand.php
    |       |       |   |   DumpCommand.php
    |       |       |   |   ExitCommand.php
    |       |       |   |   HelpCommand.php
    |       |       |   |   HistoryCommand.php
    |       |       |   |   ListCommand.php
    |       |       |   |   ParseCommand.php
    |       |       |   |   PsyVersionCommand.php
    |       |       |   |   ReflectingCommand.php
    |       |       |   |   ShowCommand.php
    |       |       |   |   SudoCommand.php
    |       |       |   |   ThrowUpCommand.php
    |       |       |   |   TraceCommand.php
    |       |       |   |   WhereamiCommand.php
    |       |       |   |   WtfCommand.php
    |       |       |   |   
    |       |       |   \---ListCommand
    |       |       |           ClassConstantEnumerator.php
    |       |       |           ClassEnumerator.php
    |       |       |           ConstantEnumerator.php
    |       |       |           Enumerator.php
    |       |       |           FunctionEnumerator.php
    |       |       |           GlobalVariableEnumerator.php
    |       |       |           InterfaceEnumerator.php
    |       |       |           MethodEnumerator.php
    |       |       |           PropertyEnumerator.php
    |       |       |           TraitEnumerator.php
    |       |       |           VariableEnumerator.php
    |       |       |           
    |       |       +---Exception
    |       |       |       BreakException.php
    |       |       |       DeprecatedException.php
    |       |       |       ErrorException.php
    |       |       |       Exception.php
    |       |       |       FatalErrorException.php
    |       |       |       ParseErrorException.php
    |       |       |       RuntimeException.php
    |       |       |       ThrowUpException.php
    |       |       |       TypeErrorException.php
    |       |       |       
    |       |       +---ExecutionLoop
    |       |       |       ForkingLoop.php
    |       |       |       Loop.php
    |       |       |       
    |       |       +---Formatter
    |       |       |       CodeFormatter.php
    |       |       |       DocblockFormatter.php
    |       |       |       Formatter.php
    |       |       |       SignatureFormatter.php
    |       |       |       
    |       |       +---Input
    |       |       |       CodeArgument.php
    |       |       |       FilterOptions.php
    |       |       |       ShellInput.php
    |       |       |       SilentInput.php
    |       |       |       
    |       |       +---Output
    |       |       |       OutputPager.php
    |       |       |       PassthruPager.php
    |       |       |       ProcOutputPager.php
    |       |       |       ShellOutput.php
    |       |       |       
    |       |       +---Readline
    |       |       |       GNUReadline.php
    |       |       |       HoaConsole.php
    |       |       |       Libedit.php
    |       |       |       Readline.php
    |       |       |       Transient.php
    |       |       |       
    |       |       +---Reflection
    |       |       |       ReflectionConstant.php
    |       |       |       ReflectionLanguageConstruct.php
    |       |       |       ReflectionLanguageConstructParameter.php
    |       |       |       
    |       |       +---Sudo
    |       |       |       SudoVisitor.php
    |       |       |       
    |       |       +---TabCompletion
    |       |       |   |   AutoCompleter.php
    |       |       |   |   
    |       |       |   \---Matcher
    |       |       |           AbstractContextAwareMatcher.php
    |       |       |           AbstractMatcher.php
    |       |       |           ClassAttributesMatcher.php
    |       |       |           ClassMethodsMatcher.php
    |       |       |           ClassNamesMatcher.php
    |       |       |           CommandsMatcher.php
    |       |       |           ConstantsMatcher.php
    |       |       |           FunctionsMatcher.php
    |       |       |           KeywordsMatcher.php
    |       |       |           MongoClientMatcher.php
    |       |       |           MongoDatabaseMatcher.php
    |       |       |           ObjectAttributesMatcher.php
    |       |       |           ObjectMethodsMatcher.php
    |       |       |           VariablesMatcher.php
    |       |       |           
    |       |       +---Util
    |       |       |       Docblock.php
    |       |       |       Json.php
    |       |       |       Mirror.php
    |       |       |       Str.php
    |       |       |       
    |       |       +---VarDumper
    |       |       |       Cloner.php
    |       |       |       Dumper.php
    |       |       |       Presenter.php
    |       |       |       PresenterAware.php
    |       |       |       
    |       |       \---VersionUpdater
    |       |               Checker.php
    |       |               GitHubChecker.php
    |       |               IntervalChecker.php
    |       |               NoopChecker.php
    |       |               
    |       \---test
    |           +---fixtures
    |           |   |   config.php
    |           |   |   empty.php
    |           |   |   unvis_fixtures.json
    |           |   |   
    |           |   +---default
    |           |   |   +---.config
    |           |   |   |   \---psysh
    |           |   |   |           config.php
    |           |   |   |           psysh_history
    |           |   |   |           
    |           |   |   \---.local
    |           |   |       \---share
    |           |   |           \---psysh
    |           |   |                   php_manual.sqlite
    |           |   |                   
    |           |   +---legacy
    |           |   |   \---.psysh
    |           |   |           history
    |           |   |           php_manual.sqlite
    |           |   |           rc.php
    |           |   |           
    |           |   +---mixed
    |           |   |   \---.psysh
    |           |   |           config.php
    |           |   |           psysh_history
    |           |   |           rc.php
    |           |   |           
    |           |   \---project
    |           |           .psysh.php
    |           |           
    |           +---Psy
    |           |   \---Test
    |           |       |   AutoloaderTest.php
    |           |       |   CodeCleanerTest.php
    |           |       |   ConfigurationTest.php
    |           |       |   ConsoleColorFactoryTest.php
    |           |       |   ShellTest.php
    |           |       |   
    |           |       +---CodeCleaner
    |           |       |   |   AbstractClassPassTest.php
    |           |       |   |   AssignThisVariablePassTest.php
    |           |       |   |   CalledClassPassTest.php
    |           |       |   |   CallTimePassByReferencePassTest.php
    |           |       |   |   CodeCleanerTestCase.php
    |           |       |   |   ExitPassTest.php
    |           |       |   |   FinalClassPassTest.php
    |           |       |   |   FunctionReturnInWriteContextPassTest.php
    |           |       |   |   ImplicitReturnPassTest.php
    |           |       |   |   InstanceOfPassTest.php
    |           |       |   |   LeavePsyshAlonePassTest.php
    |           |       |   |   LegacyEmptyPassTest.php
    |           |       |   |   LoopContextPassTest.php
    |           |       |   |   MagicConstantsPassTest.php
    |           |       |   |   NamespacePassTest.php
    |           |       |   |   PassableByReferencePassTest.php
    |           |       |   |   StaticConstructorPassTest.php
    |           |       |   |   StrictTypesPassTest.php
    |           |       |   |   UseStatementPassTest.php
    |           |       |   |   ValidClassNamePassTest.php
    |           |       |   |   ValidConstantPassTest.php
    |           |       |   |   ValidFunctionNamePassTest.php
    |           |       |   |   
    |           |       |   \---Fixtures
    |           |       |           ClassWithCallStatic.php
    |           |       |           ClassWithStatic.php
    |           |       |           
    |           |       +---Exception
    |           |       |       BreakExceptionTest.php
    |           |       |       ErrorExceptionTest.php
    |           |       |       FatalErrorExceptionTest.php
    |           |       |       ParseErrorExceptionTest.php
    |           |       |       RuntimeExceptionTest.php
    |           |       |       
    |           |       +---Formatter
    |           |       |       CodeFormatterTest.php
    |           |       |       DocblockFormatterTest.php
    |           |       |       SignatureFormatterTest.php
    |           |       |       
    |           |       +---Input
    |           |       |       CodeArgumentTest.php
    |           |       |       ShellInputTest.php
    |           |       |       
    |           |       +---Readline
    |           |       |       GNUReadlineTest.php
    |           |       |       HoaConsoleTest.php
    |           |       |       LibeditTest.php
    |           |       |       TransientTest.php
    |           |       |       
    |           |       +---Reflection
    |           |       |       ReflectionConstantTest.php
    |           |       |       
    |           |       +---TabCompletion
    |           |       |       AutoCompleterTest.php
    |           |       |       StaticSample.php
    |           |       |       
    |           |       +---Util
    |           |       |       DocblockTest.php
    |           |       |       MirrorTest.php
    |           |       |       StrTest.php
    |           |       |       
    |           |       \---VersionUpdater
    |           |               GitHubCheckerTest.php
    |           |               
    |           \---tools
    |                   gen_unvis_fixtures.py
    |                   vis.py
    |                   
    +---ramsey
    |   \---uuid
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .travis.yml
    |       |   CHANGELOG.md
    |       |   CODE_OF_CONDUCT.md
    |       |   composer.json
    |       |   CONTRIBUTING.md
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---src
    |       |   |   BinaryUtils.php
    |       |   |   DegradedUuid.php
    |       |   |   FeatureSet.php
    |       |   |   Uuid.php
    |       |   |   UuidFactory.php
    |       |   |   UuidFactoryInterface.php
    |       |   |   UuidInterface.php
    |       |   |   
    |       |   +---Builder
    |       |   |       DefaultUuidBuilder.php
    |       |   |       DegradedUuidBuilder.php
    |       |   |       UuidBuilderInterface.php
    |       |   |       
    |       |   +---Codec
    |       |   |       CodecInterface.php
    |       |   |       GuidStringCodec.php
    |       |   |       OrderedTimeCodec.php
    |       |   |       StringCodec.php
    |       |   |       TimestampFirstCombCodec.php
    |       |   |       TimestampLastCombCodec.php
    |       |   |       
    |       |   +---Converter
    |       |   |   |   NumberConverterInterface.php
    |       |   |   |   TimeConverterInterface.php
    |       |   |   |   
    |       |   |   +---Number
    |       |   |   |       BigNumberConverter.php
    |       |   |   |       DegradedNumberConverter.php
    |       |   |   |       
    |       |   |   \---Time
    |       |   |           BigNumberTimeConverter.php
    |       |   |           DegradedTimeConverter.php
    |       |   |           PhpTimeConverter.php
    |       |   |           
    |       |   +---Exception
    |       |   |       InvalidUuidStringException.php
    |       |   |       UnsatisfiedDependencyException.php
    |       |   |       UnsupportedOperationException.php
    |       |   |       
    |       |   +---Generator
    |       |   |       CombGenerator.php
    |       |   |       DefaultTimeGenerator.php
    |       |   |       MtRandGenerator.php
    |       |   |       OpenSslGenerator.php
    |       |   |       PeclUuidRandomGenerator.php
    |       |   |       PeclUuidTimeGenerator.php
    |       |   |       RandomBytesGenerator.php
    |       |   |       RandomGeneratorFactory.php
    |       |   |       RandomGeneratorInterface.php
    |       |   |       RandomLibAdapter.php
    |       |   |       SodiumRandomGenerator.php
    |       |   |       TimeGeneratorFactory.php
    |       |   |       TimeGeneratorInterface.php
    |       |   |       
    |       |   \---Provider
    |       |       |   NodeProviderInterface.php
    |       |       |   TimeProviderInterface.php
    |       |       |   
    |       |       +---Node
    |       |       |       FallbackNodeProvider.php
    |       |       |       RandomNodeProvider.php
    |       |       |       SystemNodeProvider.php
    |       |       |       
    |       |       \---Time
    |       |               FixedTimeProvider.php
    |       |               SystemTimeProvider.php
    |       |               
    |       +---tests
    |       |   |   bootstrap.php
    |       |   |   TestCase.php
    |       |   |   UuidFactoryTest.php
    |       |   |   UuidTest.php
    |       |   |   
    |       |   +---Builder
    |       |   |       DefaultUuidBuilderTest.php
    |       |   |       DegradedUuidBuilderTest.php
    |       |   |       
    |       |   +---Codec
    |       |   |       GuidStringCodecTest.php
    |       |   |       OrderedTimeCodecTest.php
    |       |   |       StringCodecTest.php
    |       |   |       
    |       |   +---Converter
    |       |   |   +---Number
    |       |   |   |       DegradedNumberConverterTest.php
    |       |   |   |       
    |       |   |   \---Time
    |       |   |           PhpTimeConverterTest.php
    |       |   |           
    |       |   +---Encoder
    |       |   |       TimestampFirstCombCodecTest.php
    |       |   |       TimestampLastCombCodecTest.php
    |       |   |       
    |       |   +---Generator
    |       |   |       CombGeneratorTest.php
    |       |   |       DefaultTimeGeneratorTest.php
    |       |   |       MtRandGeneratorTest.php
    |       |   |       OpenSslGeneratorTest.php
    |       |   |       PeclUuidRandomGeneratorTest.php
    |       |   |       PeclUuidTestCase.php
    |       |   |       PeclUuidTimeGeneratorTest.php
    |       |   |       RandomBytesGeneratorTest.php
    |       |   |       RandomGeneratorFactoryTest.php
    |       |   |       RandomLibAdapterTest.php
    |       |   |       SodiumRandomGeneratorTest.php
    |       |   |       TimeGeneratorFactoryTest.php
    |       |   |       
    |       |   \---Provider
    |       |       +---Node
    |       |       |       FallbackNodeProviderTest.php
    |       |       |       RandomNodeProviderTest.php
    |       |       |       SystemNodeProviderTest.php
    |       |       |       
    |       |       \---Time
    |       |               FixedTimeProviderTest.php
    |       |               SystemTimeProviderTest.php
    |       |               
    |       \---util
    |           |   build-docker-image.sh
    |           |   run-tests.sh
    |           |   
    |           \---hhvm-docker
    |                   Dockerfile
    |                   
    +---sebastian
    |   +---code-unit-reverse-lookup
    |   |   |   .gitignore
    |   |   |   .php_cs
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   ChangeLog.md
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Wizard.php
    |   |   |       
    |   |   \---tests
    |   |           WizardTest.php
    |   |           
    |   +---comparator
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---build
    |   |   |       travis-ci.xml
    |   |   |       
    |   |   +---src
    |   |   |       ArrayComparator.php
    |   |   |       Comparator.php
    |   |   |       ComparisonFailure.php
    |   |   |       DateTimeComparator.php
    |   |   |       DOMNodeComparator.php
    |   |   |       DoubleComparator.php
    |   |   |       ExceptionComparator.php
    |   |   |       Factory.php
    |   |   |       MockObjectComparator.php
    |   |   |       NumericComparator.php
    |   |   |       ObjectComparator.php
    |   |   |       ResourceComparator.php
    |   |   |       ScalarComparator.php
    |   |   |       SplObjectStorageComparator.php
    |   |   |       TypeComparator.php
    |   |   |       
    |   |   \---tests
    |   |       |   ArrayComparatorTest.php
    |   |       |   autoload.php
    |   |       |   bootstrap.php
    |   |       |   DateTimeComparatorTest.php
    |   |       |   DOMNodeComparatorTest.php
    |   |       |   DoubleComparatorTest.php
    |   |       |   ExceptionComparatorTest.php
    |   |       |   FactoryTest.php
    |   |       |   MockObjectComparatorTest.php
    |   |       |   NumericComparatorTest.php
    |   |       |   ObjectComparatorTest.php
    |   |       |   ResourceComparatorTest.php
    |   |       |   ScalarComparatorTest.php
    |   |       |   SplObjectStorageComparatorTest.php
    |   |       |   TypeComparatorTest.php
    |   |       |   
    |   |       \---_files
    |   |               Author.php
    |   |               Book.php
    |   |               ClassWithToString.php
    |   |               SampleClass.php
    |   |               Struct.php
    |   |               TestClass.php
    |   |               TestClassComparator.php
    |   |               
    |   +---diff
    |   |   |   .gitignore
    |   |   |   .php_cs
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |   |   Chunk.php
    |   |   |   |   Diff.php
    |   |   |   |   Differ.php
    |   |   |   |   Line.php
    |   |   |   |   Parser.php
    |   |   |   |   
    |   |   |   \---LCS
    |   |   |           LongestCommonSubsequence.php
    |   |   |           MemoryEfficientLongestCommonSubsequenceImplementation.php
    |   |   |           TimeEfficientLongestCommonSubsequenceImplementation.php
    |   |   |           
    |   |   \---tests
    |   |       |   ChunkTest.php
    |   |       |   DifferTest.php
    |   |       |   DiffTest.php
    |   |       |   LineTest.php
    |   |       |   ParserTest.php
    |   |       |   
    |   |       +---fixtures
    |   |       |       patch.txt
    |   |       |       patch2.txt
    |   |       |       
    |   |       \---LCS
    |   |               LongestCommonSubsequenceTest.php
    |   |               MemoryEfficientImplementationTest.php
    |   |               TimeEfficientImplementationTest.php
    |   |               
    |   +---environment
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Console.php
    |   |   |       Runtime.php
    |   |   |       
    |   |   \---tests
    |   |           ConsoleTest.php
    |   |           RuntimeTest.php
    |   |           
    |   +---exporter
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Exporter.php
    |   |   |       
    |   |   \---tests
    |   |           ExporterTest.php
    |   |           
    |   +---global-state
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Blacklist.php
    |   |   |       CodeExporter.php
    |   |   |       Exception.php
    |   |   |       Restorer.php
    |   |   |       RuntimeException.php
    |   |   |       Snapshot.php
    |   |   |       
    |   |   \---tests
    |   |       |   BlacklistTest.php
    |   |       |   SnapshotTest.php
    |   |       |   
    |   |       \---_fixture
    |   |               BlacklistedChildClass.php
    |   |               BlacklistedClass.php
    |   |               BlacklistedImplementor.php
    |   |               BlacklistedInterface.php
    |   |               SnapshotClass.php
    |   |               SnapshotDomDocument.php
    |   |               SnapshotFunctions.php
    |   |               SnapshotTrait.php
    |   |               
    |   +---object-enumerator
    |   |   |   .gitignore
    |   |   |   .php_cs
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   ChangeLog.md
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Enumerator.php
    |   |   |       Exception.php
    |   |   |       InvalidArgumentException.php
    |   |   |       
    |   |   \---tests
    |   |       |   EnumeratorTest.php
    |   |       |   
    |   |       \---Fixtures
    |   |               ExceptionThrower.php
    |   |               
    |   +---recursion-context
    |   |   |   .gitignore
    |   |   |   .travis.yml
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---src
    |   |   |       Context.php
    |   |   |       Exception.php
    |   |   |       InvalidArgumentException.php
    |   |   |       
    |   |   \---tests
    |   |           ContextTest.php
    |   |           
    |   +---resource-operations
    |   |   |   .gitignore
    |   |   |   build.xml
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   README.md
    |   |   |   
    |   |   +---build
    |   |   |       generate.php
    |   |   |       
    |   |   \---src
    |   |           ResourceOperations.php
    |   |           
    |   \---version
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .php_cs
    |       |   composer.json
    |       |   LICENSE
    |       |   README.md
    |       |   
    |       \---src
    |               Version.php
    |               
    +---swiftmailer
    |   \---swiftmailer
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .php_cs.dist
    |       |   .travis.yml
    |       |   CHANGES
    |       |   composer.json
    |       |   LICENSE
    |       |   phpunit.xml.dist
    |       |   README
    |       |   VERSION
    |       |   
    |       +---doc
    |       |   |   headers.rst
    |       |   |   help-resources.rst
    |       |   |   including-the-files.rst
    |       |   |   index.rst
    |       |   |   installing.rst
    |       |   |   introduction.rst
    |       |   |   japanese.rst
    |       |   |   messages.rst
    |       |   |   overview.rst
    |       |   |   plugins.rst
    |       |   |   sending.rst
    |       |   |   
    |       |   \---uml
    |       |           Encoders.graffle
    |       |           Mime.graffle
    |       |           Transports.graffle
    |       |           
    |       +---lib
    |       |   |   mime_types.php
    |       |   |   preferences.php
    |       |   |   swiftmailer_generate_mimes_config.php
    |       |   |   swift_init.php
    |       |   |   swift_required.php
    |       |   |   swift_required_pear.php
    |       |   |   
    |       |   +---classes
    |       |   |   |   Swift.php
    |       |   |   |   
    |       |   |   \---Swift
    |       |   |       |   Attachment.php
    |       |   |       |   CharacterReader.php
    |       |   |       |   CharacterReaderFactory.php
    |       |   |       |   CharacterStream.php
    |       |   |       |   ConfigurableSpool.php
    |       |   |       |   DependencyContainer.php
    |       |   |       |   DependencyException.php
    |       |   |       |   EmbeddedFile.php
    |       |   |       |   Encoder.php
    |       |   |       |   Encoding.php
    |       |   |       |   FailoverTransport.php
    |       |   |       |   FileSpool.php
    |       |   |       |   FileStream.php
    |       |   |       |   Filterable.php
    |       |   |       |   Image.php
    |       |   |       |   InputByteStream.php
    |       |   |       |   IoException.php
    |       |   |       |   KeyCache.php
    |       |   |       |   LoadBalancedTransport.php
    |       |   |       |   Mailer.php
    |       |   |       |   MailTransport.php
    |       |   |       |   MemorySpool.php
    |       |   |       |   Message.php
    |       |   |       |   MimePart.php
    |       |   |       |   NullTransport.php
    |       |   |       |   OutputByteStream.php
    |       |   |       |   Preferences.php
    |       |   |       |   ReplacementFilterFactory.php
    |       |   |       |   RfcComplianceException.php
    |       |   |       |   SendmailTransport.php
    |       |   |       |   SignedMessage.php
    |       |   |       |   Signer.php
    |       |   |       |   SmtpTransport.php
    |       |   |       |   Spool.php
    |       |   |       |   SpoolTransport.php
    |       |   |       |   StreamFilter.php
    |       |   |       |   SwiftException.php
    |       |   |       |   Transport.php
    |       |   |       |   TransportException.php
    |       |   |       |   Validate.php
    |       |   |       |   
    |       |   |       +---ByteStream
    |       |   |       |       AbstractFilterableInputStream.php
    |       |   |       |       ArrayByteStream.php
    |       |   |       |       FileByteStream.php
    |       |   |       |       TemporaryFileByteStream.php
    |       |   |       |       
    |       |   |       +---CharacterReader
    |       |   |       |       GenericFixedWidthReader.php
    |       |   |       |       UsAsciiReader.php
    |       |   |       |       Utf8Reader.php
    |       |   |       |       
    |       |   |       +---CharacterReaderFactory
    |       |   |       |       SimpleCharacterReaderFactory.php
    |       |   |       |       
    |       |   |       +---CharacterStream
    |       |   |       |       ArrayCharacterStream.php
    |       |   |       |       NgCharacterStream.php
    |       |   |       |       
    |       |   |       +---Encoder
    |       |   |       |       Base64Encoder.php
    |       |   |       |       QpEncoder.php
    |       |   |       |       Rfc2231Encoder.php
    |       |   |       |       
    |       |   |       +---Events
    |       |   |       |       CommandEvent.php
    |       |   |       |       CommandListener.php
    |       |   |       |       Event.php
    |       |   |       |       EventDispatcher.php
    |       |   |       |       EventListener.php
    |       |   |       |       EventObject.php
    |       |   |       |       ResponseEvent.php
    |       |   |       |       ResponseListener.php
    |       |   |       |       SendEvent.php
    |       |   |       |       SendListener.php
    |       |   |       |       SimpleEventDispatcher.php
    |       |   |       |       TransportChangeEvent.php
    |       |   |       |       TransportChangeListener.php
    |       |   |       |       TransportExceptionEvent.php
    |       |   |       |       TransportExceptionListener.php
    |       |   |       |       
    |       |   |       +---KeyCache
    |       |   |       |       ArrayKeyCache.php
    |       |   |       |       DiskKeyCache.php
    |       |   |       |       KeyCacheInputStream.php
    |       |   |       |       NullKeyCache.php
    |       |   |       |       SimpleKeyCacheInputStream.php
    |       |   |       |       
    |       |   |       +---Mailer
    |       |   |       |       ArrayRecipientIterator.php
    |       |   |       |       RecipientIterator.php
    |       |   |       |       
    |       |   |       +---Mime
    |       |   |       |   |   Attachment.php
    |       |   |       |   |   CharsetObserver.php
    |       |   |       |   |   ContentEncoder.php
    |       |   |       |   |   EmbeddedFile.php
    |       |   |       |   |   EncodingObserver.php
    |       |   |       |   |   Grammar.php
    |       |   |       |   |   Header.php
    |       |   |       |   |   HeaderEncoder.php
    |       |   |       |   |   HeaderFactory.php
    |       |   |       |   |   HeaderSet.php
    |       |   |       |   |   Message.php
    |       |   |       |   |   MimeEntity.php
    |       |   |       |   |   MimePart.php
    |       |   |       |   |   ParameterizedHeader.php
    |       |   |       |   |   SimpleHeaderFactory.php
    |       |   |       |   |   SimpleHeaderSet.php
    |       |   |       |   |   SimpleMessage.php
    |       |   |       |   |   SimpleMimeEntity.php
    |       |   |       |   |   
    |       |   |       |   +---ContentEncoder
    |       |   |       |   |       Base64ContentEncoder.php
    |       |   |       |   |       NativeQpContentEncoder.php
    |       |   |       |   |       PlainContentEncoder.php
    |       |   |       |   |       QpContentEncoder.php
    |       |   |       |   |       QpContentEncoderProxy.php
    |       |   |       |   |       RawContentEncoder.php
    |       |   |       |   |       
    |       |   |       |   +---HeaderEncoder
    |       |   |       |   |       Base64HeaderEncoder.php
    |       |   |       |   |       QpHeaderEncoder.php
    |       |   |       |   |       
    |       |   |       |   \---Headers
    |       |   |       |           AbstractHeader.php
    |       |   |       |           DateHeader.php
    |       |   |       |           IdentificationHeader.php
    |       |   |       |           MailboxHeader.php
    |       |   |       |           OpenDKIMHeader.php
    |       |   |       |           ParameterizedHeader.php
    |       |   |       |           PathHeader.php
    |       |   |       |           UnstructuredHeader.php
    |       |   |       |           
    |       |   |       +---Plugins
    |       |   |       |   |   AntiFloodPlugin.php
    |       |   |       |   |   BandwidthMonitorPlugin.php
    |       |   |       |   |   DecoratorPlugin.php
    |       |   |       |   |   ImpersonatePlugin.php
    |       |   |       |   |   Logger.php
    |       |   |       |   |   LoggerPlugin.php
    |       |   |       |   |   MessageLogger.php
    |       |   |       |   |   PopBeforeSmtpPlugin.php
    |       |   |       |   |   RedirectingPlugin.php
    |       |   |       |   |   Reporter.php
    |       |   |       |   |   ReporterPlugin.php
    |       |   |       |   |   Sleeper.php
    |       |   |       |   |   ThrottlerPlugin.php
    |       |   |       |   |   Timer.php
    |       |   |       |   |   
    |       |   |       |   +---Decorator
    |       |   |       |   |       Replacements.php
    |       |   |       |   |       
    |       |   |       |   +---Loggers
    |       |   |       |   |       ArrayLogger.php
    |       |   |       |   |       EchoLogger.php
    |       |   |       |   |       
    |       |   |       |   +---Pop
    |       |   |       |   |       Pop3Connection.php
    |       |   |       |   |       Pop3Exception.php
    |       |   |       |   |       
    |       |   |       |   \---Reporters
    |       |   |       |           HitReporter.php
    |       |   |       |           HtmlReporter.php
    |       |   |       |           
    |       |   |       +---Signers
    |       |   |       |       BodySigner.php
    |       |   |       |       DKIMSigner.php
    |       |   |       |       DomainKeySigner.php
    |       |   |       |       HeaderSigner.php
    |       |   |       |       OpenDKIMSigner.php
    |       |   |       |       SMimeSigner.php
    |       |   |       |       
    |       |   |       +---StreamFilters
    |       |   |       |       ByteArrayReplacementFilter.php
    |       |   |       |       StringReplacementFilter.php
    |       |   |       |       StringReplacementFilterFactory.php
    |       |   |       |       
    |       |   |       \---Transport
    |       |   |           |   AbstractSmtpTransport.php
    |       |   |           |   EsmtpHandler.php
    |       |   |           |   EsmtpTransport.php
    |       |   |           |   FailoverTransport.php
    |       |   |           |   IoBuffer.php
    |       |   |           |   LoadBalancedTransport.php
    |       |   |           |   MailInvoker.php
    |       |   |           |   MailTransport.php
    |       |   |           |   NullTransport.php
    |       |   |           |   SendmailTransport.php
    |       |   |           |   SimpleMailInvoker.php
    |       |   |           |   SmtpAgent.php
    |       |   |           |   SpoolTransport.php
    |       |   |           |   StreamBuffer.php
    |       |   |           |   
    |       |   |           \---Esmtp
    |       |   |               |   Authenticator.php
    |       |   |               |   AuthHandler.php
    |       |   |               |   
    |       |   |               \---Auth
    |       |   |                       CramMd5Authenticator.php
    |       |   |                       LoginAuthenticator.php
    |       |   |                       NTLMAuthenticator.php
    |       |   |                       PlainAuthenticator.php
    |       |   |                       XOAuth2Authenticator.php
    |       |   |                       
    |       |   \---dependency_maps
    |       |           cache_deps.php
    |       |           message_deps.php
    |       |           mime_deps.php
    |       |           transport_deps.php
    |       |           
    |       +---notes
    |       |   |   APPS
    |       |   |   CHARSETS
    |       |   |   message.xml
    |       |   |   smtp.txt
    |       |   |   
    |       |   \---rfc
    |       |           rfc0821.txt
    |       |           rfc0822.txt
    |       |           rfc1341.txt
    |       |           rfc1521.txt
    |       |           rfc1854.txt
    |       |           rfc2015.txt
    |       |           rfc2045.txt
    |       |           rfc2046.txt
    |       |           rfc2047.txt
    |       |           rfc2048.txt
    |       |           rfc2049.txt
    |       |           rfc2183.txt
    |       |           rfc2222.txt
    |       |           rfc2231.txt
    |       |           rfc2234.txt
    |       |           rfc2440.txt
    |       |           rfc2487.txt
    |       |           rfc2554.txt
    |       |           rfc2821.txt
    |       |           rfc2822.txt
    |       |           rfc3156.txt
    |       |           rfc3676.txt
    |       |           rfc4505.txt
    |       |           rfc4616.txt
    |       |           rfc4870.txt
    |       |           rfc4871.txt
    |       |           rfc4880.txt
    |       |           rfc4954.txt
    |       |           rfc5751.txt
    |       |           whats_where.txt
    |       |           
    |       \---tests
    |           |   acceptance.conf.php.default
    |           |   bootstrap.php
    |           |   IdenticalBinaryConstraint.php
    |           |   smoke.conf.php.default
    |           |   StreamCollector.php
    |           |   SwiftMailerSmokeTestCase.php
    |           |   SwiftMailerTestCase.php
    |           |   
    |           +---acceptance
    |           |   \---Swift
    |           |       |   AttachmentAcceptanceTest.php
    |           |       |   DependencyContainerAcceptanceTest.php
    |           |       |   EmbeddedFileAcceptanceTest.php
    |           |       |   EncodingAcceptanceTest.php
    |           |       |   MessageAcceptanceTest.php
    |           |       |   MimePartAcceptanceTest.php
    |           |       |   
    |           |       +---ByteStream
    |           |       |       FileByteStreamAcceptanceTest.php
    |           |       |       
    |           |       +---CharacterReaderFactory
    |           |       |       SimpleCharacterReaderFactoryAcceptanceTest.php
    |           |       |       
    |           |       +---Encoder
    |           |       |       Base64EncoderAcceptanceTest.php
    |           |       |       QpEncoderAcceptanceTest.php
    |           |       |       Rfc2231EncoderAcceptanceTest.php
    |           |       |       
    |           |       +---KeyCache
    |           |       |       ArrayKeyCacheAcceptanceTest.php
    |           |       |       DiskKeyCacheAcceptanceTest.php
    |           |       |       
    |           |       +---Mime
    |           |       |   |   AttachmentAcceptanceTest.php
    |           |       |   |   EmbeddedFileAcceptanceTest.php
    |           |       |   |   MimePartAcceptanceTest.php
    |           |       |   |   SimpleMessageAcceptanceTest.php
    |           |       |   |   
    |           |       |   +---ContentEncoder
    |           |       |   |       Base64ContentEncoderAcceptanceTest.php
    |           |       |   |       NativeQpContentEncoderAcceptanceTest.php
    |           |       |   |       PlainContentEncoderAcceptanceTest.php
    |           |       |   |       QpContentEncoderAcceptanceTest.php
    |           |       |   |       
    |           |       |   \---HeaderEncoder
    |           |       |           Base64HeaderEncoderAcceptanceTest.php
    |           |       |           
    |           |       \---Transport
    |           |           \---StreamBuffer
    |           |                   AbstractStreamBufferAcceptanceTest.php
    |           |                   BasicSocketAcceptanceTest.php
    |           |                   ProcessAcceptanceTest.php
    |           |                   SocketTimeoutTest.php
    |           |                   SslSocketAcceptanceTest.php
    |           |                   TlsSocketAcceptanceTest.php
    |           |                   
    |           +---bug
    |           |   \---Swift
    |           |           Bug111Test.php
    |           |           Bug118Test.php
    |           |           Bug206Test.php
    |           |           Bug274Test.php
    |           |           Bug34Test.php
    |           |           Bug35Test.php
    |           |           Bug38Test.php
    |           |           Bug518Test.php
    |           |           Bug51Test.php
    |           |           Bug534Test.php
    |           |           Bug650Test.php
    |           |           Bug71Test.php
    |           |           Bug76Test.php
    |           |           BugFileByteStreamConsecutiveReadCallsTest.php
    |           |           
    |           +---fixtures
    |           |       MimeEntityFixture.php
    |           |       
    |           +---smoke
    |           |   \---Swift
    |           |       \---Smoke
    |           |               AttachmentSmokeTest.php
    |           |               BasicSmokeTest.php
    |           |               HtmlWithAttachmentSmokeTest.php
    |           |               InternationalSmokeTest.php
    |           |               
    |           +---unit
    |           |   \---Swift
    |           |       |   DependencyContainerTest.php
    |           |       |   MailerTest.php
    |           |       |   MessageTest.php
    |           |       |   
    |           |       +---ByteStream
    |           |       |       ArrayByteStreamTest.php
    |           |       |       
    |           |       +---CharacterReader
    |           |       |       GenericFixedWidthReaderTest.php
    |           |       |       UsAsciiReaderTest.php
    |           |       |       Utf8ReaderTest.php
    |           |       |       
    |           |       +---CharacterStream
    |           |       |       ArrayCharacterStreamTest.php
    |           |       |       
    |           |       +---Encoder
    |           |       |       Base64EncoderTest.php
    |           |       |       QpEncoderTest.php
    |           |       |       Rfc2231EncoderTest.php
    |           |       |       
    |           |       +---Events
    |           |       |       CommandEventTest.php
    |           |       |       EventObjectTest.php
    |           |       |       ResponseEventTest.php
    |           |       |       SendEventTest.php
    |           |       |       SimpleEventDispatcherTest.php
    |           |       |       TransportChangeEventTest.php
    |           |       |       TransportExceptionEventTest.php
    |           |       |       
    |           |       +---KeyCache
    |           |       |       ArrayKeyCacheTest.php
    |           |       |       SimpleKeyCacheInputStreamTest.php
    |           |       |       
    |           |       +---Mailer
    |           |       |       ArrayRecipientIteratorTest.php
    |           |       |       
    |           |       +---Mime
    |           |       |   |   AbstractMimeEntityTest.php
    |           |       |   |   AttachmentTest.php
    |           |       |   |   EmbeddedFileTest.php
    |           |       |   |   MimePartTest.php
    |           |       |   |   SimpleHeaderFactoryTest.php
    |           |       |   |   SimpleHeaderSetTest.php
    |           |       |   |   SimpleMessageTest.php
    |           |       |   |   SimpleMimeEntityTest.php
    |           |       |   |   
    |           |       |   +---ContentEncoder
    |           |       |   |       Base64ContentEncoderTest.php
    |           |       |   |       PlainContentEncoderTest.php
    |           |       |   |       QpContentEncoderTest.php
    |           |       |   |       
    |           |       |   +---HeaderEncoder
    |           |       |   |       Base64HeaderEncoderTest.php
    |           |       |   |       QpHeaderEncoderTest.php
    |           |       |   |       
    |           |       |   \---Headers
    |           |       |           DateHeaderTest.php
    |           |       |           IdentificationHeaderTest.php
    |           |       |           MailboxHeaderTest.php
    |           |       |           ParameterizedHeaderTest.php
    |           |       |           PathHeaderTest.php
    |           |       |           UnstructuredHeaderTest.php
    |           |       |           
    |           |       +---Plugins
    |           |       |   |   AntiFloodPluginTest.php
    |           |       |   |   BandwidthMonitorPluginTest.php
    |           |       |   |   DecoratorPluginTest.php
    |           |       |   |   LoggerPluginTest.php
    |           |       |   |   PopBeforeSmtpPluginTest.php
    |           |       |   |   RedirectingPluginTest.php
    |           |       |   |   ReporterPluginTest.php
    |           |       |   |   ThrottlerPluginTest.php
    |           |       |   |   
    |           |       |   +---Loggers
    |           |       |   |       ArrayLoggerTest.php
    |           |       |   |       EchoLoggerTest.php
    |           |       |   |       
    |           |       |   \---Reporters
    |           |       |           HitReporterTest.php
    |           |       |           HtmlReporterTest.php
    |           |       |           
    |           |       +---Signers
    |           |       |       DKIMSignerTest.php
    |           |       |       OpenDKIMSignerTest.php
    |           |       |       SMimeSignerTest.php
    |           |       |       
    |           |       +---StreamFilters
    |           |       |       ByteArrayReplacementFilterTest.php
    |           |       |       StringReplacementFilterFactoryTest.php
    |           |       |       StringReplacementFilterTest.php
    |           |       |       
    |           |       \---Transport
    |           |           |   AbstractSmtpEventSupportTest.php
    |           |           |   AbstractSmtpTest.php
    |           |           |   EsmtpTransportTest.php
    |           |           |   FailoverTransportTest.php
    |           |           |   LoadBalancedTransportTest.php
    |           |           |   MailTransportTest.php
    |           |           |   SendmailTransportTest.php
    |           |           |   StreamBufferTest.php
    |           |           |   
    |           |           +---Esmtp
    |           |           |   |   AuthHandlerTest.php
    |           |           |   |   
    |           |           |   \---Auth
    |           |           |           CramMd5AuthenticatorTest.php
    |           |           |           LoginAuthenticatorTest.php
    |           |           |           NTLMAuthenticatorTest.php
    |           |           |           PlainAuthenticatorTest.php
    |           |           |           
    |           |           \---EsmtpTransport
    |           |                   ExtensionSupportTest.php
    |           |                   
    |           \---_samples
    |               +---charsets
    |               |   +---iso-2022-jp
    |               |   |       one.txt
    |               |   |       
    |               |   +---iso-8859-1
    |               |   |       one.txt
    |               |   |       
    |               |   \---utf-8
    |               |           one.txt
    |               |           three.txt
    |               |           two.txt
    |               |           
    |               +---dkim
    |               |       dkim.test.priv
    |               |       dkim.test.pub
    |               |       
    |               +---files
    |               |       data.txt
    |               |       swiftmailer.png
    |               |       textfile.zip
    |               |       
    |               \---smime
    |                       ca.crt
    |                       ca.key
    |                       CA.srl
    |                       create-cert.sh
    |                       encrypt.crt
    |                       encrypt.key
    |                       encrypt2.crt
    |                       encrypt2.key
    |                       intermediate.crt
    |                       intermediate.key
    |                       sign.crt
    |                       sign.key
    |                       sign2.crt
    |                       sign2.key
    |                       
    +---symfony
    |   +---console
    |   |   |   .gitignore
    |   |   |   Application.php
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   ConsoleEvents.php
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   Terminal.php
    |   |   |   
    |   |   +---Command
    |   |   |       Command.php
    |   |   |       HelpCommand.php
    |   |   |       ListCommand.php
    |   |   |       LockableTrait.php
    |   |   |       
    |   |   +---DependencyInjection
    |   |   |       AddConsoleCommandPass.php
    |   |   |       
    |   |   +---Descriptor
    |   |   |       ApplicationDescription.php
    |   |   |       Descriptor.php
    |   |   |       DescriptorInterface.php
    |   |   |       JsonDescriptor.php
    |   |   |       MarkdownDescriptor.php
    |   |   |       TextDescriptor.php
    |   |   |       XmlDescriptor.php
    |   |   |       
    |   |   +---Event
    |   |   |       ConsoleCommandEvent.php
    |   |   |       ConsoleErrorEvent.php
    |   |   |       ConsoleEvent.php
    |   |   |       ConsoleExceptionEvent.php
    |   |   |       ConsoleTerminateEvent.php
    |   |   |       
    |   |   +---EventListener
    |   |   |       ErrorListener.php
    |   |   |       
    |   |   +---Exception
    |   |   |       CommandNotFoundException.php
    |   |   |       ExceptionInterface.php
    |   |   |       InvalidArgumentException.php
    |   |   |       InvalidOptionException.php
    |   |   |       LogicException.php
    |   |   |       RuntimeException.php
    |   |   |       
    |   |   +---Formatter
    |   |   |       OutputFormatter.php
    |   |   |       OutputFormatterInterface.php
    |   |   |       OutputFormatterStyle.php
    |   |   |       OutputFormatterStyleInterface.php
    |   |   |       OutputFormatterStyleStack.php
    |   |   |       
    |   |   +---Helper
    |   |   |       DebugFormatterHelper.php
    |   |   |       DescriptorHelper.php
    |   |   |       FormatterHelper.php
    |   |   |       Helper.php
    |   |   |       HelperInterface.php
    |   |   |       HelperSet.php
    |   |   |       InputAwareHelper.php
    |   |   |       ProcessHelper.php
    |   |   |       ProgressBar.php
    |   |   |       ProgressIndicator.php
    |   |   |       QuestionHelper.php
    |   |   |       SymfonyQuestionHelper.php
    |   |   |       Table.php
    |   |   |       TableCell.php
    |   |   |       TableSeparator.php
    |   |   |       TableStyle.php
    |   |   |       
    |   |   +---Input
    |   |   |       ArgvInput.php
    |   |   |       ArrayInput.php
    |   |   |       Input.php
    |   |   |       InputArgument.php
    |   |   |       InputAwareInterface.php
    |   |   |       InputDefinition.php
    |   |   |       InputInterface.php
    |   |   |       InputOption.php
    |   |   |       StreamableInputInterface.php
    |   |   |       StringInput.php
    |   |   |       
    |   |   +---Logger
    |   |   |       ConsoleLogger.php
    |   |   |       
    |   |   +---Output
    |   |   |       BufferedOutput.php
    |   |   |       ConsoleOutput.php
    |   |   |       ConsoleOutputInterface.php
    |   |   |       NullOutput.php
    |   |   |       Output.php
    |   |   |       OutputInterface.php
    |   |   |       StreamOutput.php
    |   |   |       
    |   |   +---Question
    |   |   |       ChoiceQuestion.php
    |   |   |       ConfirmationQuestion.php
    |   |   |       Question.php
    |   |   |       
    |   |   +---Resources
    |   |   |   \---bin
    |   |   |           hiddeninput.exe
    |   |   |           
    |   |   +---Style
    |   |   |       OutputStyle.php
    |   |   |       StyleInterface.php
    |   |   |       SymfonyStyle.php
    |   |   |       
    |   |   +---Tester
    |   |   |       ApplicationTester.php
    |   |   |       CommandTester.php
    |   |   |       
    |   |   \---Tests
    |   |       |   ApplicationTest.php
    |   |       |   TerminalTest.php
    |   |       |   
    |   |       +---Command
    |   |       |       CommandTest.php
    |   |       |       HelpCommandTest.php
    |   |       |       ListCommandTest.php
    |   |       |       LockableTraitTest.php
    |   |       |       
    |   |       +---DependencyInjection
    |   |       |       AddConsoleCommandPassTest.php
    |   |       |       
    |   |       +---Descriptor
    |   |       |       AbstractDescriptorTest.php
    |   |       |       JsonDescriptorTest.php
    |   |       |       MarkdownDescriptorTest.php
    |   |       |       ObjectsProvider.php
    |   |       |       TextDescriptorTest.php
    |   |       |       XmlDescriptorTest.php
    |   |       |       
    |   |       +---EventListener
    |   |       |       ErrorListenerTest.php
    |   |       |       
    |   |       +---Fixtures
    |   |       |   |   application_1.json
    |   |       |   |   application_1.md
    |   |       |   |   application_1.txt
    |   |       |   |   application_1.xml
    |   |       |   |   application_2.json
    |   |       |   |   application_2.md
    |   |       |   |   application_2.txt
    |   |       |   |   application_2.xml
    |   |       |   |   application_filtered_namespace.txt
    |   |       |   |   application_gethelp.txt
    |   |       |   |   application_mbstring.md
    |   |       |   |   application_mbstring.txt
    |   |       |   |   application_renderexception1.txt
    |   |       |   |   application_renderexception2.txt
    |   |       |   |   application_renderexception3.txt
    |   |       |   |   application_renderexception3decorated.txt
    |   |       |   |   application_renderexception4.txt
    |   |       |   |   application_renderexception_doublewidth1.txt
    |   |       |   |   application_renderexception_doublewidth1decorated.txt
    |   |       |   |   application_renderexception_doublewidth2.txt
    |   |       |   |   application_renderexception_escapeslines.txt
    |   |       |   |   application_run1.txt
    |   |       |   |   application_run2.txt
    |   |       |   |   application_run3.txt
    |   |       |   |   application_run4.txt
    |   |       |   |   BarBucCommand.php
    |   |       |   |   command_1.json
    |   |       |   |   command_1.md
    |   |       |   |   command_1.txt
    |   |       |   |   command_1.xml
    |   |       |   |   command_2.json
    |   |       |   |   command_2.md
    |   |       |   |   command_2.txt
    |   |       |   |   command_2.xml
    |   |       |   |   command_mbstring.md
    |   |       |   |   command_mbstring.txt
    |   |       |   |   DescriptorApplication1.php
    |   |       |   |   DescriptorApplication2.php
    |   |       |   |   DescriptorApplicationMbString.php
    |   |       |   |   DescriptorCommand1.php
    |   |       |   |   DescriptorCommand2.php
    |   |       |   |   DescriptorCommand3.php
    |   |       |   |   DescriptorCommand4.php
    |   |       |   |   DescriptorCommandMbString.php
    |   |       |   |   DummyOutput.php
    |   |       |   |   Foo1Command.php
    |   |       |   |   Foo2Command.php
    |   |       |   |   Foo3Command.php
    |   |       |   |   Foo4Command.php
    |   |       |   |   Foo5Command.php
    |   |       |   |   Foo6Command.php
    |   |       |   |   FoobarCommand.php
    |   |       |   |   FooCommand.php
    |   |       |   |   FooLock2Command.php
    |   |       |   |   FooLockCommand.php
    |   |       |   |   FooSubnamespaced1Command.php
    |   |       |   |   FooSubnamespaced2Command.php
    |   |       |   |   input_argument_1.json
    |   |       |   |   input_argument_1.md
    |   |       |   |   input_argument_1.txt
    |   |       |   |   input_argument_1.xml
    |   |       |   |   input_argument_2.json
    |   |       |   |   input_argument_2.md
    |   |       |   |   input_argument_2.txt
    |   |       |   |   input_argument_2.xml
    |   |       |   |   input_argument_3.json
    |   |       |   |   input_argument_3.md
    |   |       |   |   input_argument_3.txt
    |   |       |   |   input_argument_3.xml
    |   |       |   |   input_argument_4.json
    |   |       |   |   input_argument_4.md
    |   |       |   |   input_argument_4.txt
    |   |       |   |   input_argument_4.xml
    |   |       |   |   input_argument_with_style.json
    |   |       |   |   input_argument_with_style.md
    |   |       |   |   input_argument_with_style.txt
    |   |       |   |   input_argument_with_style.xml
    |   |       |   |   input_definition_1.json
    |   |       |   |   input_definition_1.md
    |   |       |   |   input_definition_1.txt
    |   |       |   |   input_definition_1.xml
    |   |       |   |   input_definition_2.json
    |   |       |   |   input_definition_2.md
    |   |       |   |   input_definition_2.txt
    |   |       |   |   input_definition_2.xml
    |   |       |   |   input_definition_3.json
    |   |       |   |   input_definition_3.md
    |   |       |   |   input_definition_3.txt
    |   |       |   |   input_definition_3.xml
    |   |       |   |   input_definition_4.json
    |   |       |   |   input_definition_4.md
    |   |       |   |   input_definition_4.txt
    |   |       |   |   input_definition_4.xml
    |   |       |   |   input_option_1.json
    |   |       |   |   input_option_1.md
    |   |       |   |   input_option_1.txt
    |   |       |   |   input_option_1.xml
    |   |       |   |   input_option_2.json
    |   |       |   |   input_option_2.md
    |   |       |   |   input_option_2.txt
    |   |       |   |   input_option_2.xml
    |   |       |   |   input_option_3.json
    |   |       |   |   input_option_3.md
    |   |       |   |   input_option_3.txt
    |   |       |   |   input_option_3.xml
    |   |       |   |   input_option_4.json
    |   |       |   |   input_option_4.md
    |   |       |   |   input_option_4.txt
    |   |       |   |   input_option_4.xml
    |   |       |   |   input_option_5.json
    |   |       |   |   input_option_5.md
    |   |       |   |   input_option_5.txt
    |   |       |   |   input_option_5.xml
    |   |       |   |   input_option_6.json
    |   |       |   |   input_option_6.md
    |   |       |   |   input_option_6.txt
    |   |       |   |   input_option_6.xml
    |   |       |   |   input_option_with_style.json
    |   |       |   |   input_option_with_style.md
    |   |       |   |   input_option_with_style.txt
    |   |       |   |   input_option_with_style.xml
    |   |       |   |   input_option_with_style_array.json
    |   |       |   |   input_option_with_style_array.md
    |   |       |   |   input_option_with_style_array.txt
    |   |       |   |   input_option_with_style_array.xml
    |   |       |   |   TestCommand.php
    |   |       |   |   
    |   |       |   \---Style
    |   |       |       \---SymfonyStyle
    |   |       |           +---command
    |   |       |           |       command_0.php
    |   |       |           |       command_1.php
    |   |       |           |       command_10.php
    |   |       |           |       command_11.php
    |   |       |           |       command_12.php
    |   |       |           |       command_13.php
    |   |       |           |       command_14.php
    |   |       |           |       command_15.php
    |   |       |           |       command_16.php
    |   |       |           |       command_17.php
    |   |       |           |       command_2.php
    |   |       |           |       command_3.php
    |   |       |           |       command_4.php
    |   |       |           |       command_5.php
    |   |       |           |       command_6.php
    |   |       |           |       command_7.php
    |   |       |           |       command_8.php
    |   |       |           |       command_9.php
    |   |       |           |       interactive_command_1.php
    |   |       |           |       
    |   |       |           \---output
    |   |       |                   interactive_output_1.txt
    |   |       |                   output_0.txt
    |   |       |                   output_1.txt
    |   |       |                   output_10.txt
    |   |       |                   output_11.txt
    |   |       |                   output_12.txt
    |   |       |                   output_13.txt
    |   |       |                   output_14.txt
    |   |       |                   output_15.txt
    |   |       |                   output_16.txt
    |   |       |                   output_17.txt
    |   |       |                   output_2.txt
    |   |       |                   output_3.txt
    |   |       |                   output_4.txt
    |   |       |                   output_5.txt
    |   |       |                   output_6.txt
    |   |       |                   output_7.txt
    |   |       |                   output_8.txt
    |   |       |                   output_9.txt
    |   |       |                   
    |   |       +---Formatter
    |   |       |       OutputFormatterStyleStackTest.php
    |   |       |       OutputFormatterStyleTest.php
    |   |       |       OutputFormatterTest.php
    |   |       |       
    |   |       +---Helper
    |   |       |       AbstractQuestionHelperTest.php
    |   |       |       FormatterHelperTest.php
    |   |       |       HelperSetTest.php
    |   |       |       HelperTest.php
    |   |       |       ProcessHelperTest.php
    |   |       |       ProgressBarTest.php
    |   |       |       ProgressIndicatorTest.php
    |   |       |       QuestionHelperTest.php
    |   |       |       SymfonyQuestionHelperTest.php
    |   |       |       TableStyleTest.php
    |   |       |       TableTest.php
    |   |       |       
    |   |       +---Input
    |   |       |       ArgvInputTest.php
    |   |       |       ArrayInputTest.php
    |   |       |       InputArgumentTest.php
    |   |       |       InputDefinitionTest.php
    |   |       |       InputOptionTest.php
    |   |       |       InputTest.php
    |   |       |       StringInputTest.php
    |   |       |       
    |   |       +---Logger
    |   |       |       ConsoleLoggerTest.php
    |   |       |       
    |   |       +---Output
    |   |       |       ConsoleOutputTest.php
    |   |       |       NullOutputTest.php
    |   |       |       OutputTest.php
    |   |       |       StreamOutputTest.php
    |   |       |       
    |   |       +---Style
    |   |       |       SymfonyStyleTest.php
    |   |       |       
    |   |       \---Tester
    |   |               ApplicationTesterTest.php
    |   |               CommandTesterTest.php
    |   |               
    |   +---css-selector
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   CssSelectorConverter.php
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---Exception
    |   |   |       ExceptionInterface.php
    |   |   |       ExpressionErrorException.php
    |   |   |       InternalErrorException.php
    |   |   |       ParseException.php
    |   |   |       SyntaxErrorException.php
    |   |   |       
    |   |   +---Node
    |   |   |       AbstractNode.php
    |   |   |       AttributeNode.php
    |   |   |       ClassNode.php
    |   |   |       CombinedSelectorNode.php
    |   |   |       ElementNode.php
    |   |   |       FunctionNode.php
    |   |   |       HashNode.php
    |   |   |       NegationNode.php
    |   |   |       NodeInterface.php
    |   |   |       PseudoNode.php
    |   |   |       SelectorNode.php
    |   |   |       Specificity.php
    |   |   |       
    |   |   +---Parser
    |   |   |   |   Parser.php
    |   |   |   |   ParserInterface.php
    |   |   |   |   Reader.php
    |   |   |   |   Token.php
    |   |   |   |   TokenStream.php
    |   |   |   |   
    |   |   |   +---Handler
    |   |   |   |       CommentHandler.php
    |   |   |   |       HandlerInterface.php
    |   |   |   |       HashHandler.php
    |   |   |   |       IdentifierHandler.php
    |   |   |   |       NumberHandler.php
    |   |   |   |       StringHandler.php
    |   |   |   |       WhitespaceHandler.php
    |   |   |   |       
    |   |   |   +---Shortcut
    |   |   |   |       ClassParser.php
    |   |   |   |       ElementParser.php
    |   |   |   |       EmptyStringParser.php
    |   |   |   |       HashParser.php
    |   |   |   |       
    |   |   |   \---Tokenizer
    |   |   |           Tokenizer.php
    |   |   |           TokenizerEscaping.php
    |   |   |           TokenizerPatterns.php
    |   |   |           
    |   |   +---Tests
    |   |   |   |   CssSelectorConverterTest.php
    |   |   |   |   
    |   |   |   +---Node
    |   |   |   |       AbstractNodeTest.php
    |   |   |   |       AttributeNodeTest.php
    |   |   |   |       ClassNodeTest.php
    |   |   |   |       CombinedSelectorNodeTest.php
    |   |   |   |       ElementNodeTest.php
    |   |   |   |       FunctionNodeTest.php
    |   |   |   |       HashNodeTest.php
    |   |   |   |       NegationNodeTest.php
    |   |   |   |       PseudoNodeTest.php
    |   |   |   |       SelectorNodeTest.php
    |   |   |   |       SpecificityTest.php
    |   |   |   |       
    |   |   |   +---Parser
    |   |   |   |   |   ParserTest.php
    |   |   |   |   |   ReaderTest.php
    |   |   |   |   |   TokenStreamTest.php
    |   |   |   |   |   
    |   |   |   |   +---Handler
    |   |   |   |   |       AbstractHandlerTest.php
    |   |   |   |   |       CommentHandlerTest.php
    |   |   |   |   |       HashHandlerTest.php
    |   |   |   |   |       IdentifierHandlerTest.php
    |   |   |   |   |       NumberHandlerTest.php
    |   |   |   |   |       StringHandlerTest.php
    |   |   |   |   |       WhitespaceHandlerTest.php
    |   |   |   |   |       
    |   |   |   |   \---Shortcut
    |   |   |   |           ClassParserTest.php
    |   |   |   |           ElementParserTest.php
    |   |   |   |           EmptyStringParserTest.php
    |   |   |   |           HashParserTest.php
    |   |   |   |           
    |   |   |   \---XPath
    |   |   |       |   TranslatorTest.php
    |   |   |       |   
    |   |   |       \---Fixtures
    |   |   |               ids.html
    |   |   |               lang.xml
    |   |   |               shakespear.html
    |   |   |               
    |   |   \---XPath
    |   |       |   Translator.php
    |   |       |   TranslatorInterface.php
    |   |       |   XPathExpr.php
    |   |       |   
    |   |       \---Extension
    |   |               AbstractExtension.php
    |   |               AttributeMatchingExtension.php
    |   |               CombinationExtension.php
    |   |               ExtensionInterface.php
    |   |               FunctionExtension.php
    |   |               HtmlExtension.php
    |   |               NodeExtension.php
    |   |               PseudoClassExtension.php
    |   |               
    |   +---debug
    |   |   |   .gitignore
    |   |   |   BufferingLogger.php
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   Debug.php
    |   |   |   DebugClassLoader.php
    |   |   |   ErrorHandler.php
    |   |   |   ExceptionHandler.php
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---Exception
    |   |   |       ClassNotFoundException.php
    |   |   |       ContextErrorException.php
    |   |   |       FatalErrorException.php
    |   |   |       FatalThrowableError.php
    |   |   |       FlattenException.php
    |   |   |       OutOfMemoryException.php
    |   |   |       SilencedErrorContext.php
    |   |   |       UndefinedFunctionException.php
    |   |   |       UndefinedMethodException.php
    |   |   |       
    |   |   +---FatalErrorHandler
    |   |   |       ClassNotFoundFatalErrorHandler.php
    |   |   |       FatalErrorHandlerInterface.php
    |   |   |       UndefinedFunctionFatalErrorHandler.php
    |   |   |       UndefinedMethodFatalErrorHandler.php
    |   |   |       
    |   |   +---Resources
    |   |   |   \---ext
    |   |   |       |   config.m4
    |   |   |       |   config.w32
    |   |   |       |   php_symfony_debug.h
    |   |   |       |   README.md
    |   |   |       |   symfony_debug.c
    |   |   |       |   
    |   |   |       \---tests
    |   |   |               001.phpt
    |   |   |               002.phpt
    |   |   |               002_1.phpt
    |   |   |               003.phpt
    |   |   |               
    |   |   \---Tests
    |   |       |   DebugClassLoaderTest.php
    |   |       |   ErrorHandlerTest.php
    |   |       |   ExceptionHandlerTest.php
    |   |       |   HeaderMock.php
    |   |       |   MockExceptionHandler.php
    |   |       |   
    |   |       +---Exception
    |   |       |       FlattenExceptionTest.php
    |   |       |       
    |   |       +---FatalErrorHandler
    |   |       |       ClassNotFoundFatalErrorHandlerTest.php
    |   |       |       UndefinedFunctionFatalErrorHandlerTest.php
    |   |       |       UndefinedMethodFatalErrorHandlerTest.php
    |   |       |       
    |   |       +---Fixtures
    |   |       |   |   casemismatch.php
    |   |       |   |   ClassAlias.php
    |   |       |   |   DeprecatedClass.php
    |   |       |   |   DeprecatedInterface.php
    |   |       |   |   ExtendedFinalMethod.php
    |   |       |   |   FinalClass.php
    |   |       |   |   FinalMethod.php
    |   |       |   |   NonDeprecatedInterface.php
    |   |       |   |   notPsr0Bis.php
    |   |       |   |   PEARClass.php
    |   |       |   |   reallyNotPsr0.php
    |   |       |   |   ToStringThrower.php
    |   |       |   |   
    |   |       |   \---psr4
    |   |       |           Psr4CaseMismatch.php
    |   |       |           
    |   |       \---Fixtures2
    |   |               RequiredTwice.php
    |   |               
    |   +---event-dispatcher
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   ContainerAwareEventDispatcher.php
    |   |   |   Event.php
    |   |   |   EventDispatcher.php
    |   |   |   EventDispatcherInterface.php
    |   |   |   EventSubscriberInterface.php
    |   |   |   GenericEvent.php
    |   |   |   ImmutableEventDispatcher.php
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   
    |   |   +---Debug
    |   |   |       TraceableEventDispatcher.php
    |   |   |       TraceableEventDispatcherInterface.php
    |   |   |       WrappedListener.php
    |   |   |       
    |   |   +---DependencyInjection
    |   |   |       RegisterListenersPass.php
    |   |   |       
    |   |   \---Tests
    |   |       |   AbstractEventDispatcherTest.php
    |   |       |   ContainerAwareEventDispatcherTest.php
    |   |       |   EventDispatcherTest.php
    |   |       |   EventTest.php
    |   |       |   GenericEventTest.php
    |   |       |   ImmutableEventDispatcherTest.php
    |   |       |   
    |   |       +---Debug
    |   |       |       TraceableEventDispatcherTest.php
    |   |       |       
    |   |       \---DependencyInjection
    |   |               RegisterListenersPassTest.php
    |   |               
    |   +---finder
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   Finder.php
    |   |   |   Glob.php
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   SplFileInfo.php
    |   |   |   
    |   |   +---Comparator
    |   |   |       Comparator.php
    |   |   |       DateComparator.php
    |   |   |       NumberComparator.php
    |   |   |       
    |   |   +---Exception
    |   |   |       AccessDeniedException.php
    |   |   |       ExceptionInterface.php
    |   |   |       
    |   |   +---Iterator
    |   |   |       CustomFilterIterator.php
    |   |   |       DateRangeFilterIterator.php
    |   |   |       DepthRangeFilterIterator.php
    |   |   |       ExcludeDirectoryFilterIterator.php
    |   |   |       FilecontentFilterIterator.php
    |   |   |       FilenameFilterIterator.php
    |   |   |       FileTypeFilterIterator.php
    |   |   |       FilterIterator.php
    |   |   |       MultiplePcreFilterIterator.php
    |   |   |       PathFilterIterator.php
    |   |   |       RecursiveDirectoryIterator.php
    |   |   |       SizeRangeFilterIterator.php
    |   |   |       SortableIterator.php
    |   |   |       
    |   |   \---Tests
    |   |       |   FinderTest.php
    |   |       |   GlobTest.php
    |   |       |   
    |   |       +---Comparator
    |   |       |       ComparatorTest.php
    |   |       |       DateComparatorTest.php
    |   |       |       NumberComparatorTest.php
    |   |       |       
    |   |       +---Fixtures
    |   |       |   |   dolor.txt
    |   |       |   |   ipsum.txt
    |   |       |   |   lorem.txt
    |   |       |   |   
    |   |       |   +---.dot
    |   |       |   |   |   a
    |   |       |   |   |   
    |   |       |   |   \---b
    |   |       |   |           c.neon
    |   |       |   |           d.neon
    |   |       |   |           
    |   |       |   +---A
    |   |       |   |   |   a.dat
    |   |       |   |   |   
    |   |       |   |   \---B
    |   |       |   |       |   ab.dat
    |   |       |   |       |   
    |   |       |   |       \---C
    |   |       |   |               abc.dat
    |   |       |   |               
    |   |       |   +---copy
    |   |       |   |   \---A
    |   |       |   |       |   a.dat.copy
    |   |       |   |       |   
    |   |       |   |       \---B
    |   |       |   |           |   ab.dat.copy
    |   |       |   |           |   
    |   |       |   |           \---C
    |   |       |   |                   abc.dat.copy
    |   |       |   |                   
    |   |       |   +---one
    |   |       |   |   |   .dot
    |   |       |   |   |   a
    |   |       |   |   |   
    |   |       |   |   \---b
    |   |       |   |           c.neon
    |   |       |   |           d.neon
    |   |       |   |           
    |   |       |   +---r+e.gex[c]a(r)s
    |   |       |   |   \---dir
    |   |       |   |           bar.dat
    |   |       |   |           
    |   |       |   \---with space
    |   |       |           foo.txt
    |   |       |           
    |   |       \---Iterator
    |   |               CustomFilterIteratorTest.php
    |   |               DateRangeFilterIteratorTest.php
    |   |               DepthRangeFilterIteratorTest.php
    |   |               ExcludeDirectoryFilterIteratorTest.php
    |   |               FilecontentFilterIteratorTest.php
    |   |               FilenameFilterIteratorTest.php
    |   |               FileTypeFilterIteratorTest.php
    |   |               FilterIteratorTest.php
    |   |               Iterator.php
    |   |               IteratorTestCase.php
    |   |               MockFileListIterator.php
    |   |               MockSplFileInfo.php
    |   |               MultiplePcreFilterIteratorTest.php
    |   |               PathFilterIteratorTest.php
    |   |               RealIteratorTestCase.php
    |   |               RecursiveDirectoryIteratorTest.php
    |   |               SizeRangeFilterIteratorTest.php
    |   |               SortableIteratorTest.php
    |   |               
    |   +---http-foundation
    |   |   |   .gitignore
    |   |   |   AcceptHeader.php
    |   |   |   AcceptHeaderItem.php
    |   |   |   ApacheRequest.php
    |   |   |   BinaryFileResponse.php
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   Cookie.php
    |   |   |   ExpressionRequestMatcher.php
    |   |   |   FileBag.php
    |   |   |   HeaderBag.php
    |   |   |   IpUtils.php
    |   |   |   JsonResponse.php
    |   |   |   LICENSE
    |   |   |   ParameterBag.php
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   RedirectResponse.php
    |   |   |   Request.php
    |   |   |   RequestMatcher.php
    |   |   |   RequestMatcherInterface.php
    |   |   |   RequestStack.php
    |   |   |   Response.php
    |   |   |   ResponseHeaderBag.php
    |   |   |   ServerBag.php
    |   |   |   StreamedResponse.php
    |   |   |   
    |   |   +---Exception
    |   |   |       ConflictingHeadersException.php
    |   |   |       RequestExceptionInterface.php
    |   |   |       SuspiciousOperationException.php
    |   |   |       
    |   |   +---File
    |   |   |   |   File.php
    |   |   |   |   Stream.php
    |   |   |   |   UploadedFile.php
    |   |   |   |   
    |   |   |   +---Exception
    |   |   |   |       AccessDeniedException.php
    |   |   |   |       FileException.php
    |   |   |   |       FileNotFoundException.php
    |   |   |   |       UnexpectedTypeException.php
    |   |   |   |       UploadException.php
    |   |   |   |       
    |   |   |   \---MimeType
    |   |   |           ExtensionGuesser.php
    |   |   |           ExtensionGuesserInterface.php
    |   |   |           FileBinaryMimeTypeGuesser.php
    |   |   |           FileinfoMimeTypeGuesser.php
    |   |   |           MimeTypeExtensionGuesser.php
    |   |   |           MimeTypeGuesser.php
    |   |   |           MimeTypeGuesserInterface.php
    |   |   |           
    |   |   +---Session
    |   |   |   |   Session.php
    |   |   |   |   SessionBagInterface.php
    |   |   |   |   SessionInterface.php
    |   |   |   |   
    |   |   |   +---Attribute
    |   |   |   |       AttributeBag.php
    |   |   |   |       AttributeBagInterface.php
    |   |   |   |       NamespacedAttributeBag.php
    |   |   |   |       
    |   |   |   +---Flash
    |   |   |   |       AutoExpireFlashBag.php
    |   |   |   |       FlashBag.php
    |   |   |   |       FlashBagInterface.php
    |   |   |   |       
    |   |   |   \---Storage
    |   |   |       |   MetadataBag.php
    |   |   |       |   MockArraySessionStorage.php
    |   |   |       |   MockFileSessionStorage.php
    |   |   |       |   NativeSessionStorage.php
    |   |   |       |   PhpBridgeSessionStorage.php
    |   |   |       |   SessionStorageInterface.php
    |   |   |       |   
    |   |   |       +---Handler
    |   |   |       |       MemcachedSessionHandler.php
    |   |   |       |       MemcacheSessionHandler.php
    |   |   |       |       MongoDbSessionHandler.php
    |   |   |       |       NativeFileSessionHandler.php
    |   |   |       |       NativeSessionHandler.php
    |   |   |       |       NullSessionHandler.php
    |   |   |       |       PdoSessionHandler.php
    |   |   |       |       WriteCheckSessionHandler.php
    |   |   |       |       
    |   |   |       \---Proxy
    |   |   |               AbstractProxy.php
    |   |   |               NativeProxy.php
    |   |   |               SessionHandlerProxy.php
    |   |   |               
    |   |   \---Tests
    |   |       |   AcceptHeaderItemTest.php
    |   |       |   AcceptHeaderTest.php
    |   |       |   ApacheRequestTest.php
    |   |       |   BinaryFileResponseTest.php
    |   |       |   CookieTest.php
    |   |       |   ExpressionRequestMatcherTest.php
    |   |       |   FileBagTest.php
    |   |       |   HeaderBagTest.php
    |   |       |   IpUtilsTest.php
    |   |       |   JsonResponseTest.php
    |   |       |   ParameterBagTest.php
    |   |       |   RedirectResponseTest.php
    |   |       |   RequestMatcherTest.php
    |   |       |   RequestStackTest.php
    |   |       |   RequestTest.php
    |   |       |   ResponseHeaderBagTest.php
    |   |       |   ResponseTest.php
    |   |       |   ResponseTestCase.php
    |   |       |   ServerBagTest.php
    |   |       |   StreamedResponseTest.php
    |   |       |   
    |   |       +---File
    |   |       |   |   FakeFile.php
    |   |       |   |   FileTest.php
    |   |       |   |   UploadedFileTest.php
    |   |       |   |   
    |   |       |   +---Fixtures
    |   |       |   |   |   .unknownextension
    |   |       |   |   |   other-file.example
    |   |       |   |   |   test
    |   |       |   |   |   test.gif
    |   |       |   |   |   
    |   |       |   |   \---directory
    |   |       |   |           .empty
    |   |       |   |           
    |   |       |   \---MimeType
    |   |       |           MimeTypeTest.php
    |   |       |           
    |   |       +---schema
    |   |       |       http-status-codes.rng
    |   |       |       iana-registry.rng
    |   |       |       
    |   |       \---Session
    |   |           |   SessionTest.php
    |   |           |   
    |   |           +---Attribute
    |   |           |       AttributeBagTest.php
    |   |           |       NamespacedAttributeBagTest.php
    |   |           |       
    |   |           +---Flash
    |   |           |       AutoExpireFlashBagTest.php
    |   |           |       FlashBagTest.php
    |   |           |       
    |   |           \---Storage
    |   |               |   MetadataBagTest.php
    |   |               |   MockArraySessionStorageTest.php
    |   |               |   MockFileSessionStorageTest.php
    |   |               |   NativeSessionStorageTest.php
    |   |               |   PhpBridgeSessionStorageTest.php
    |   |               |   
    |   |               +---Handler
    |   |               |       MemcachedSessionHandlerTest.php
    |   |               |       MemcacheSessionHandlerTest.php
    |   |               |       MongoDbSessionHandlerTest.php
    |   |               |       NativeFileSessionHandlerTest.php
    |   |               |       NativeSessionHandlerTest.php
    |   |               |       NullSessionHandlerTest.php
    |   |               |       PdoSessionHandlerTest.php
    |   |               |       WriteCheckSessionHandlerTest.php
    |   |               |       
    |   |               \---Proxy
    |   |                       AbstractProxyTest.php
    |   |                       NativeProxyTest.php
    |   |                       SessionHandlerProxyTest.php
    |   |                       
    |   +---http-kernel
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   Client.php
    |   |   |   composer.json
    |   |   |   HttpKernel.php
    |   |   |   HttpKernelInterface.php
    |   |   |   Kernel.php
    |   |   |   KernelEvents.php
    |   |   |   KernelInterface.php
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   TerminableInterface.php
    |   |   |   UriSigner.php
    |   |   |   
    |   |   +---Bundle
    |   |   |       Bundle.php
    |   |   |       BundleInterface.php
    |   |   |       
    |   |   +---CacheClearer
    |   |   |       CacheClearerInterface.php
    |   |   |       ChainCacheClearer.php
    |   |   |       Psr6CacheClearer.php
    |   |   |       
    |   |   +---CacheWarmer
    |   |   |       CacheWarmer.php
    |   |   |       CacheWarmerAggregate.php
    |   |   |       CacheWarmerInterface.php
    |   |   |       WarmableInterface.php
    |   |   |       
    |   |   +---Config
    |   |   |       EnvParametersResource.php
    |   |   |       FileLocator.php
    |   |   |       
    |   |   +---Controller
    |   |   |   |   ArgumentResolver.php
    |   |   |   |   ArgumentResolverInterface.php
    |   |   |   |   ArgumentValueResolverInterface.php
    |   |   |   |   ContainerControllerResolver.php
    |   |   |   |   ControllerReference.php
    |   |   |   |   ControllerResolver.php
    |   |   |   |   ControllerResolverInterface.php
    |   |   |   |   TraceableArgumentResolver.php
    |   |   |   |   TraceableControllerResolver.php
    |   |   |   |   
    |   |   |   \---ArgumentResolver
    |   |   |           DefaultValueResolver.php
    |   |   |           RequestAttributeValueResolver.php
    |   |   |           RequestValueResolver.php
    |   |   |           ServiceValueResolver.php
    |   |   |           SessionValueResolver.php
    |   |   |           VariadicValueResolver.php
    |   |   |           
    |   |   +---ControllerMetadata
    |   |   |       ArgumentMetadata.php
    |   |   |       ArgumentMetadataFactory.php
    |   |   |       ArgumentMetadataFactoryInterface.php
    |   |   |       
    |   |   +---DataCollector
    |   |   |   |   AjaxDataCollector.php
    |   |   |   |   ConfigDataCollector.php
    |   |   |   |   DataCollector.php
    |   |   |   |   DataCollectorInterface.php
    |   |   |   |   DumpDataCollector.php
    |   |   |   |   EventDataCollector.php
    |   |   |   |   ExceptionDataCollector.php
    |   |   |   |   LateDataCollectorInterface.php
    |   |   |   |   LoggerDataCollector.php
    |   |   |   |   MemoryDataCollector.php
    |   |   |   |   RequestDataCollector.php
    |   |   |   |   RouterDataCollector.php
    |   |   |   |   TimeDataCollector.php
    |   |   |   |   
    |   |   |   \---Util
    |   |   |           ValueExporter.php
    |   |   |           
    |   |   +---Debug
    |   |   |       FileLinkFormatter.php
    |   |   |       TraceableEventDispatcher.php
    |   |   |       
    |   |   +---DependencyInjection
    |   |   |       AddAnnotatedClassesToCachePass.php
    |   |   |       AddClassesToCachePass.php
    |   |   |       ConfigurableExtension.php
    |   |   |       ControllerArgumentValueResolverPass.php
    |   |   |       Extension.php
    |   |   |       FragmentRendererPass.php
    |   |   |       LazyLoadingFragmentHandler.php
    |   |   |       MergeExtensionConfigurationPass.php
    |   |   |       RegisterControllerArgumentLocatorsPass.php
    |   |   |       RemoveEmptyControllerArgumentLocatorsPass.php
    |   |   |       
    |   |   +---Event
    |   |   |       FilterControllerArgumentsEvent.php
    |   |   |       FilterControllerEvent.php
    |   |   |       FilterResponseEvent.php
    |   |   |       FinishRequestEvent.php
    |   |   |       GetResponseEvent.php
    |   |   |       GetResponseForControllerResultEvent.php
    |   |   |       GetResponseForExceptionEvent.php
    |   |   |       KernelEvent.php
    |   |   |       PostResponseEvent.php
    |   |   |       
    |   |   +---EventListener
    |   |   |       AbstractSessionListener.php
    |   |   |       AbstractTestSessionListener.php
    |   |   |       AddRequestFormatsListener.php
    |   |   |       DebugHandlersListener.php
    |   |   |       DumpListener.php
    |   |   |       ExceptionListener.php
    |   |   |       FragmentListener.php
    |   |   |       LocaleListener.php
    |   |   |       ProfilerListener.php
    |   |   |       ResponseListener.php
    |   |   |       RouterListener.php
    |   |   |       SaveSessionListener.php
    |   |   |       SessionListener.php
    |   |   |       StreamedResponseListener.php
    |   |   |       SurrogateListener.php
    |   |   |       TestSessionListener.php
    |   |   |       TranslatorListener.php
    |   |   |       ValidateRequestListener.php
    |   |   |       
    |   |   +---Exception
    |   |   |       AccessDeniedHttpException.php
    |   |   |       BadRequestHttpException.php
    |   |   |       ConflictHttpException.php
    |   |   |       GoneHttpException.php
    |   |   |       HttpException.php
    |   |   |       HttpExceptionInterface.php
    |   |   |       LengthRequiredHttpException.php
    |   |   |       MethodNotAllowedHttpException.php
    |   |   |       NotAcceptableHttpException.php
    |   |   |       NotFoundHttpException.php
    |   |   |       PreconditionFailedHttpException.php
    |   |   |       PreconditionRequiredHttpException.php
    |   |   |       ServiceUnavailableHttpException.php
    |   |   |       TooManyRequestsHttpException.php
    |   |   |       UnauthorizedHttpException.php
    |   |   |       UnprocessableEntityHttpException.php
    |   |   |       UnsupportedMediaTypeHttpException.php
    |   |   |       
    |   |   +---Fragment
    |   |   |       AbstractSurrogateFragmentRenderer.php
    |   |   |       EsiFragmentRenderer.php
    |   |   |       FragmentHandler.php
    |   |   |       FragmentRendererInterface.php
    |   |   |       HIncludeFragmentRenderer.php
    |   |   |       InlineFragmentRenderer.php
    |   |   |       RoutableFragmentRenderer.php
    |   |   |       SsiFragmentRenderer.php
    |   |   |       
    |   |   +---HttpCache
    |   |   |       AbstractSurrogate.php
    |   |   |       Esi.php
    |   |   |       HttpCache.php
    |   |   |       ResponseCacheStrategy.php
    |   |   |       ResponseCacheStrategyInterface.php
    |   |   |       Ssi.php
    |   |   |       Store.php
    |   |   |       StoreInterface.php
    |   |   |       SurrogateInterface.php
    |   |   |       
    |   |   +---Log
    |   |   |       DebugLoggerInterface.php
    |   |   |       
    |   |   +---Profiler
    |   |   |       FileProfilerStorage.php
    |   |   |       Profile.php
    |   |   |       Profiler.php
    |   |   |       ProfilerStorageInterface.php
    |   |   |       
    |   |   \---Tests
    |   |       |   ClientTest.php
    |   |       |   HttpKernelTest.php
    |   |       |   KernelTest.php
    |   |       |   Logger.php
    |   |       |   TestHttpKernel.php
    |   |       |   UriSignerTest.php
    |   |       |   
    |   |       +---Bundle
    |   |       |       BundleTest.php
    |   |       |       
    |   |       +---CacheClearer
    |   |       |       ChainCacheClearerTest.php
    |   |       |       Psr6CacheClearerTest.php
    |   |       |       
    |   |       +---CacheWarmer
    |   |       |       CacheWarmerAggregateTest.php
    |   |       |       CacheWarmerTest.php
    |   |       |       
    |   |       +---Config
    |   |       |       EnvParametersResourceTest.php
    |   |       |       FileLocatorTest.php
    |   |       |       
    |   |       +---Controller
    |   |       |       ArgumentResolverTest.php
    |   |       |       ContainerControllerResolverTest.php
    |   |       |       ControllerResolverTest.php
    |   |       |       
    |   |       +---ControllerMetadata
    |   |       |       ArgumentMetadataFactoryTest.php
    |   |       |       ArgumentMetadataTest.php
    |   |       |       
    |   |       +---DataCollector
    |   |       |   |   Compiler.log
    |   |       |   |   ConfigDataCollectorTest.php
    |   |       |   |   DataCollectorTest.php
    |   |       |   |   DumpDataCollectorTest.php
    |   |       |   |   ExceptionDataCollectorTest.php
    |   |       |   |   LoggerDataCollectorTest.php
    |   |       |   |   MemoryDataCollectorTest.php
    |   |       |   |   RequestDataCollectorTest.php
    |   |       |   |   TimeDataCollectorTest.php
    |   |       |   |   
    |   |       |   \---Util
    |   |       |           ValueExporterTest.php
    |   |       |           
    |   |       +---Debug
    |   |       |       FileLinkFormatterTest.php
    |   |       |       TraceableEventDispatcherTest.php
    |   |       |       
    |   |       +---DependencyInjection
    |   |       |       AddAnnotatedClassesToCachePassTest.php
    |   |       |       ControllerArgumentValueResolverPassTest.php
    |   |       |       FragmentRendererPassTest.php
    |   |       |       LazyLoadingFragmentHandlerTest.php
    |   |       |       MergeExtensionConfigurationPassTest.php
    |   |       |       RegisterControllerArgumentLocatorsPassTest.php
    |   |       |       RemoveEmptyControllerArgumentLocatorsPassTest.php
    |   |       |       
    |   |       +---Event
    |   |       |       GetResponseForExceptionEventTest.php
    |   |       |       
    |   |       +---EventListener
    |   |       |       AddRequestFormatsListenerTest.php
    |   |       |       DebugHandlersListenerTest.php
    |   |       |       DumpListenerTest.php
    |   |       |       ExceptionListenerTest.php
    |   |       |       FragmentListenerTest.php
    |   |       |       LocaleListenerTest.php
    |   |       |       ProfilerListenerTest.php
    |   |       |       ResponseListenerTest.php
    |   |       |       RouterListenerTest.php
    |   |       |       SurrogateListenerTest.php
    |   |       |       TestSessionListenerTest.php
    |   |       |       TranslatorListenerTest.php
    |   |       |       ValidateRequestListenerTest.php
    |   |       |       
    |   |       +---Exception
    |   |       |       AccessDeniedHttpExceptionTest.php
    |   |       |       BadRequestHttpExceptionTest.php
    |   |       |       ConflictHttpExceptionTest.php
    |   |       |       GoneHttpExceptionTest.php
    |   |       |       HttpExceptionTest.php
    |   |       |       LengthRequiredHttpExceptionTest.php
    |   |       |       MethodNotAllowedHttpExceptionTest.php
    |   |       |       NotAcceptableHttpExceptionTest.php
    |   |       |       NotFoundHttpExceptionTest.php
    |   |       |       PreconditionFailedHttpExceptionTest.php
    |   |       |       PreconditionRequiredHttpExceptionTest.php
    |   |       |       ServiceUnavailableHttpExceptionTest.php
    |   |       |       TooManyRequestsHttpExceptionTest.php
    |   |       |       UnauthorizedHttpExceptionTest.php
    |   |       |       UnprocessableEntityHttpExceptionTest.php
    |   |       |       UnsupportedMediaTypeHttpExceptionTest.php
    |   |       |       
    |   |       +---Fixtures
    |   |       |   |   KernelForOverrideName.php
    |   |       |   |   KernelForTest.php
    |   |       |   |   KernelWithoutBundles.php
    |   |       |   |   TestClient.php
    |   |       |   |   TestEventDispatcher.php
    |   |       |   |   
    |   |       |   +---123
    |   |       |   |       Kernel123.php
    |   |       |   |       
    |   |       |   +---BaseBundle
    |   |       |   |   \---Resources
    |   |       |   |           foo.txt
    |   |       |   |           hide.txt
    |   |       |   |           
    |   |       |   +---Bundle1Bundle
    |   |       |   |   |   bar.txt
    |   |       |   |   |   foo.txt
    |   |       |   |   |   
    |   |       |   |   \---Resources
    |   |       |   |           foo.txt
    |   |       |   |           
    |   |       |   +---Bundle2Bundle
    |   |       |   |       foo.txt
    |   |       |   |       
    |   |       |   +---ChildBundle
    |   |       |   |   \---Resources
    |   |       |   |           foo.txt
    |   |       |   |           hide.txt
    |   |       |   |           
    |   |       |   +---Controller
    |   |       |   |       BasicTypesController.php
    |   |       |   |       ExtendingRequest.php
    |   |       |   |       ExtendingSession.php
    |   |       |   |       NullableController.php
    |   |       |   |       VariadicController.php
    |   |       |   |       
    |   |       |   +---DataCollector
    |   |       |   |       CloneVarDataCollector.php
    |   |       |   |       
    |   |       |   +---ExtensionAbsentBundle
    |   |       |   |       ExtensionAbsentBundle.php
    |   |       |   |       
    |   |       |   +---ExtensionLoadedBundle
    |   |       |   |   |   ExtensionLoadedBundle.php
    |   |       |   |   |   
    |   |       |   |   \---DependencyInjection
    |   |       |   |           ExtensionLoadedExtension.php
    |   |       |   |           
    |   |       |   +---ExtensionNotValidBundle
    |   |       |   |   |   ExtensionNotValidBundle.php
    |   |       |   |   |   
    |   |       |   |   \---DependencyInjection
    |   |       |   |           ExtensionNotValidExtension.php
    |   |       |   |           
    |   |       |   +---ExtensionPresentBundle
    |   |       |   |   |   ExtensionPresentBundle.php
    |   |       |   |   |   
    |   |       |   |   +---Command
    |   |       |   |   |       BarCommand.php
    |   |       |   |   |       FooCommand.php
    |   |       |   |   |       
    |   |       |   |   \---DependencyInjection
    |   |       |   |           ExtensionPresentExtension.php
    |   |       |   |           
    |   |       |   \---Resources
    |   |       |       +---BaseBundle
    |   |       |       |       hide.txt
    |   |       |       |       
    |   |       |       +---Bundle1Bundle
    |   |       |       |       foo.txt
    |   |       |       |       
    |   |       |       +---ChildBundle
    |   |       |       |       foo.txt
    |   |       |       |       
    |   |       |       \---FooBundle
    |   |       |               foo.txt
    |   |       |               
    |   |       +---Fragment
    |   |       |       EsiFragmentRendererTest.php
    |   |       |       FragmentHandlerTest.php
    |   |       |       HIncludeFragmentRendererTest.php
    |   |       |       InlineFragmentRendererTest.php
    |   |       |       RoutableFragmentRendererTest.php
    |   |       |       SsiFragmentRendererTest.php
    |   |       |       
    |   |       +---HttpCache
    |   |       |       EsiTest.php
    |   |       |       HttpCacheTest.php
    |   |       |       HttpCacheTestCase.php
    |   |       |       ResponseCacheStrategyTest.php
    |   |       |       SsiTest.php
    |   |       |       StoreTest.php
    |   |       |       TestHttpKernel.php
    |   |       |       TestMultipleHttpKernel.php
    |   |       |       
    |   |       \---Profiler
    |   |               FileProfilerStorageTest.php
    |   |               ProfilerTest.php
    |   |               
    |   +---polyfill-mbstring
    |   |   |   bootstrap.php
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   Mbstring.php
    |   |   |   README.md
    |   |   |   
    |   |   \---Resources
    |   |       \---unidata
    |   |               lowerCase.php
    |   |               upperCase.php
    |   |               
    |   +---process
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   ExecutableFinder.php
    |   |   |   InputStream.php
    |   |   |   LICENSE
    |   |   |   PhpExecutableFinder.php
    |   |   |   PhpProcess.php
    |   |   |   phpunit.xml.dist
    |   |   |   Process.php
    |   |   |   ProcessBuilder.php
    |   |   |   ProcessUtils.php
    |   |   |   README.md
    |   |   |   
    |   |   +---Exception
    |   |   |       ExceptionInterface.php
    |   |   |       InvalidArgumentException.php
    |   |   |       LogicException.php
    |   |   |       ProcessFailedException.php
    |   |   |       ProcessTimedOutException.php
    |   |   |       RuntimeException.php
    |   |   |       
    |   |   +---Pipes
    |   |   |       AbstractPipes.php
    |   |   |       PipesInterface.php
    |   |   |       UnixPipes.php
    |   |   |       WindowsPipes.php
    |   |   |       
    |   |   \---Tests
    |   |           ExecutableFinderTest.php
    |   |           NonStopableProcess.php
    |   |           PhpExecutableFinderTest.php
    |   |           PhpProcessTest.php
    |   |           PipeStdinInStdoutStdErrStreamSelect.php
    |   |           ProcessBuilderTest.php
    |   |           ProcessFailedExceptionTest.php
    |   |           ProcessTest.php
    |   |           ProcessUtilsTest.php
    |   |           SignalListener.php
    |   |           
    |   +---routing
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   CompiledRoute.php
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   RequestContext.php
    |   |   |   RequestContextAwareInterface.php
    |   |   |   Route.php
    |   |   |   RouteCollection.php
    |   |   |   RouteCollectionBuilder.php
    |   |   |   RouteCompiler.php
    |   |   |   RouteCompilerInterface.php
    |   |   |   Router.php
    |   |   |   RouterInterface.php
    |   |   |   
    |   |   +---Annotation
    |   |   |       Route.php
    |   |   |       
    |   |   +---DependencyInjection
    |   |   |       RoutingResolverPass.php
    |   |   |       
    |   |   +---Exception
    |   |   |       ExceptionInterface.php
    |   |   |       InvalidParameterException.php
    |   |   |       MethodNotAllowedException.php
    |   |   |       MissingMandatoryParametersException.php
    |   |   |       ResourceNotFoundException.php
    |   |   |       RouteNotFoundException.php
    |   |   |       
    |   |   +---Generator
    |   |   |   |   ConfigurableRequirementsInterface.php
    |   |   |   |   UrlGenerator.php
    |   |   |   |   UrlGeneratorInterface.php
    |   |   |   |   
    |   |   |   \---Dumper
    |   |   |           GeneratorDumper.php
    |   |   |           GeneratorDumperInterface.php
    |   |   |           PhpGeneratorDumper.php
    |   |   |           
    |   |   +---Loader
    |   |   |   |   AnnotationClassLoader.php
    |   |   |   |   AnnotationDirectoryLoader.php
    |   |   |   |   AnnotationFileLoader.php
    |   |   |   |   ClosureLoader.php
    |   |   |   |   DirectoryLoader.php
    |   |   |   |   ObjectRouteLoader.php
    |   |   |   |   PhpFileLoader.php
    |   |   |   |   XmlFileLoader.php
    |   |   |   |   YamlFileLoader.php
    |   |   |   |   
    |   |   |   +---DependencyInjection
    |   |   |   |       ServiceRouterLoader.php
    |   |   |   |       
    |   |   |   \---schema
    |   |   |       \---routing
    |   |   |               routing-1.0.xsd
    |   |   |               
    |   |   +---Matcher
    |   |   |   |   RedirectableUrlMatcher.php
    |   |   |   |   RedirectableUrlMatcherInterface.php
    |   |   |   |   RequestMatcherInterface.php
    |   |   |   |   TraceableUrlMatcher.php
    |   |   |   |   UrlMatcher.php
    |   |   |   |   UrlMatcherInterface.php
    |   |   |   |   
    |   |   |   \---Dumper
    |   |   |           DumperCollection.php
    |   |   |           DumperRoute.php
    |   |   |           MatcherDumper.php
    |   |   |           MatcherDumperInterface.php
    |   |   |           PhpMatcherDumper.php
    |   |   |           StaticPrefixCollection.php
    |   |   |           
    |   |   \---Tests
    |   |       |   CompiledRouteTest.php
    |   |       |   RequestContextTest.php
    |   |       |   RouteCollectionBuilderTest.php
    |   |       |   RouteCollectionTest.php
    |   |       |   RouteCompilerTest.php
    |   |       |   RouterTest.php
    |   |       |   RouteTest.php
    |   |       |   
    |   |       +---Annotation
    |   |       |       RouteTest.php
    |   |       |       
    |   |       +---DependencyInjection
    |   |       |       RoutingResolverPassTest.php
    |   |       |       
    |   |       +---Fixtures
    |   |       |   |   annotated.php
    |   |       |   |   bad_format.yml
    |   |       |   |   bar.xml
    |   |       |   |   CustomXmlFileLoader.php
    |   |       |   |   empty.yml
    |   |       |   |   file_resource.yml
    |   |       |   |   foo.xml
    |   |       |   |   foo1.xml
    |   |       |   |   incomplete.yml
    |   |       |   |   list_defaults.xml
    |   |       |   |   list_in_list_defaults.xml
    |   |       |   |   list_in_map_defaults.xml
    |   |       |   |   list_null_values.xml
    |   |       |   |   map_defaults.xml
    |   |       |   |   map_in_list_defaults.xml
    |   |       |   |   map_in_map_defaults.xml
    |   |       |   |   map_null_values.xml
    |   |       |   |   missing_id.xml
    |   |       |   |   missing_path.xml
    |   |       |   |   namespaceprefix.xml
    |   |       |   |   nonesense_resource_plus_path.yml
    |   |       |   |   nonesense_type_without_resource.yml
    |   |       |   |   nonvalid.xml
    |   |       |   |   nonvalid.yml
    |   |       |   |   nonvalid2.yml
    |   |       |   |   nonvalidkeys.yml
    |   |       |   |   nonvalidnode.xml
    |   |       |   |   nonvalidroute.xml
    |   |       |   |   null_values.xml
    |   |       |   |   RedirectableUrlMatcher.php
    |   |       |   |   scalar_defaults.xml
    |   |       |   |   special_route_name.yml
    |   |       |   |   validpattern.php
    |   |       |   |   validpattern.xml
    |   |       |   |   validpattern.yml
    |   |       |   |   validresource.php
    |   |       |   |   validresource.xml
    |   |       |   |   validresource.yml
    |   |       |   |   withdoctype.xml
    |   |       |   |   with_define_path_variable.php
    |   |       |   |   
    |   |       |   +---AnnotatedClasses
    |   |       |   |       AbstractClass.php
    |   |       |   |       BarClass.php
    |   |       |   |       BazClass.php
    |   |       |   |       FooClass.php
    |   |       |   |       FooTrait.php
    |   |       |   |       
    |   |       |   +---directory
    |   |       |   |   |   routes3.yml
    |   |       |   |   |   
    |   |       |   |   \---recurse
    |   |       |   |           routes1.yml
    |   |       |   |           routes2.yml
    |   |       |   |           
    |   |       |   +---directory_import
    |   |       |   |       import.yml
    |   |       |   |       
    |   |       |   +---dumper
    |   |       |   |       url_matcher1.apache
    |   |       |   |       url_matcher1.php
    |   |       |   |       url_matcher2.apache
    |   |       |   |       url_matcher2.php
    |   |       |   |       url_matcher3.php
    |   |       |   |       url_matcher4.php
    |   |       |   |       url_matcher5.php
    |   |       |   |       url_matcher6.php
    |   |       |   |       url_matcher7.php
    |   |       |   |       
    |   |       |   \---OtherAnnotatedClasses
    |   |       |           NoStartTagClass.php
    |   |       |           VariadicClass.php
    |   |       |           
    |   |       +---Generator
    |   |       |   |   UrlGeneratorTest.php
    |   |       |   |   
    |   |       |   \---Dumper
    |   |       |           PhpGeneratorDumperTest.php
    |   |       |           
    |   |       +---Loader
    |   |       |       AbstractAnnotationLoaderTest.php
    |   |       |       AnnotationClassLoaderTest.php
    |   |       |       AnnotationDirectoryLoaderTest.php
    |   |       |       AnnotationFileLoaderTest.php
    |   |       |       ClosureLoaderTest.php
    |   |       |       DirectoryLoaderTest.php
    |   |       |       ObjectRouteLoaderTest.php
    |   |       |       PhpFileLoaderTest.php
    |   |       |       XmlFileLoaderTest.php
    |   |       |       YamlFileLoaderTest.php
    |   |       |       
    |   |       \---Matcher
    |   |           |   RedirectableUrlMatcherTest.php
    |   |           |   TraceableUrlMatcherTest.php
    |   |           |   UrlMatcherTest.php
    |   |           |   
    |   |           \---Dumper
    |   |                   DumperCollectionTest.php
    |   |                   PhpMatcherDumperTest.php
    |   |                   StaticPrefixCollectionTest.php
    |   |                   
    |   +---translation
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   DataCollectorTranslator.php
    |   |   |   IdentityTranslator.php
    |   |   |   Interval.php
    |   |   |   LICENSE
    |   |   |   LoggingTranslator.php
    |   |   |   MessageCatalogue.php
    |   |   |   MessageCatalogueInterface.php
    |   |   |   MessageSelector.php
    |   |   |   MetadataAwareInterface.php
    |   |   |   phpunit.xml.dist
    |   |   |   PluralizationRules.php
    |   |   |   README.md
    |   |   |   Translator.php
    |   |   |   TranslatorBagInterface.php
    |   |   |   TranslatorInterface.php
    |   |   |   
    |   |   +---Catalogue
    |   |   |       AbstractOperation.php
    |   |   |       MergeOperation.php
    |   |   |       OperationInterface.php
    |   |   |       TargetOperation.php
    |   |   |       
    |   |   +---Command
    |   |   |       XliffLintCommand.php
    |   |   |       
    |   |   +---DataCollector
    |   |   |       TranslationDataCollector.php
    |   |   |       
    |   |   +---Dumper
    |   |   |       CsvFileDumper.php
    |   |   |       DumperInterface.php
    |   |   |       FileDumper.php
    |   |   |       IcuResFileDumper.php
    |   |   |       IniFileDumper.php
    |   |   |       JsonFileDumper.php
    |   |   |       MoFileDumper.php
    |   |   |       PhpFileDumper.php
    |   |   |       PoFileDumper.php
    |   |   |       QtFileDumper.php
    |   |   |       XliffFileDumper.php
    |   |   |       YamlFileDumper.php
    |   |   |       
    |   |   +---Exception
    |   |   |       ExceptionInterface.php
    |   |   |       InvalidArgumentException.php
    |   |   |       InvalidResourceException.php
    |   |   |       LogicException.php
    |   |   |       NotFoundResourceException.php
    |   |   |       RuntimeException.php
    |   |   |       
    |   |   +---Extractor
    |   |   |       AbstractFileExtractor.php
    |   |   |       ChainExtractor.php
    |   |   |       ExtractorInterface.php
    |   |   |       
    |   |   +---Loader
    |   |   |   |   ArrayLoader.php
    |   |   |   |   CsvFileLoader.php
    |   |   |   |   FileLoader.php
    |   |   |   |   IcuDatFileLoader.php
    |   |   |   |   IcuResFileLoader.php
    |   |   |   |   IniFileLoader.php
    |   |   |   |   JsonFileLoader.php
    |   |   |   |   LoaderInterface.php
    |   |   |   |   MoFileLoader.php
    |   |   |   |   PhpFileLoader.php
    |   |   |   |   PoFileLoader.php
    |   |   |   |   QtFileLoader.php
    |   |   |   |   XliffFileLoader.php
    |   |   |   |   YamlFileLoader.php
    |   |   |   |   
    |   |   |   \---schema
    |   |   |       \---dic
    |   |   |           \---xliff-core
    |   |   |                   xliff-core-1.2-strict.xsd
    |   |   |                   xliff-core-2.0.xsd
    |   |   |                   xml.xsd
    |   |   |                   
    |   |   +---Resources
    |   |   |   \---schemas
    |   |   |           xliff-core-1.2-strict.xsd
    |   |   |           
    |   |   +---Tests
    |   |   |   |   DataCollectorTranslatorTest.php
    |   |   |   |   IdentityTranslatorTest.php
    |   |   |   |   IntervalTest.php
    |   |   |   |   LoggingTranslatorTest.php
    |   |   |   |   MessageCatalogueTest.php
    |   |   |   |   MessageSelectorTest.php
    |   |   |   |   PluralizationRulesTest.php
    |   |   |   |   TranslatorCacheTest.php
    |   |   |   |   TranslatorTest.php
    |   |   |   |   
    |   |   |   +---Catalogue
    |   |   |   |       AbstractOperationTest.php
    |   |   |   |       MergeOperationTest.php
    |   |   |   |       TargetOperationTest.php
    |   |   |   |       
    |   |   |   +---DataCollector
    |   |   |   |       TranslationDataCollectorTest.php
    |   |   |   |       
    |   |   |   +---Dumper
    |   |   |   |       CsvFileDumperTest.php
    |   |   |   |       FileDumperTest.php
    |   |   |   |       IcuResFileDumperTest.php
    |   |   |   |       IniFileDumperTest.php
    |   |   |   |       JsonFileDumperTest.php
    |   |   |   |       MoFileDumperTest.php
    |   |   |   |       PhpFileDumperTest.php
    |   |   |   |       PoFileDumperTest.php
    |   |   |   |       QtFileDumperTest.php
    |   |   |   |       XliffFileDumperTest.php
    |   |   |   |       YamlFileDumperTest.php
    |   |   |   |       
    |   |   |   +---fixtures
    |   |   |   |   |   empty-translation.mo
    |   |   |   |   |   empty-translation.po
    |   |   |   |   |   empty.csv
    |   |   |   |   |   empty.ini
    |   |   |   |   |   empty.json
    |   |   |   |   |   empty.mo
    |   |   |   |   |   empty.po
    |   |   |   |   |   empty.xlf
    |   |   |   |   |   empty.yml
    |   |   |   |   |   encoding.xlf
    |   |   |   |   |   escaped-id-plurals.po
    |   |   |   |   |   escaped-id.po
    |   |   |   |   |   fuzzy-translations.po
    |   |   |   |   |   invalid-xml-resources.xlf
    |   |   |   |   |   malformed.json
    |   |   |   |   |   messages.yml
    |   |   |   |   |   messages_linear.yml
    |   |   |   |   |   non-valid.xlf
    |   |   |   |   |   non-valid.yml
    |   |   |   |   |   plurals.mo
    |   |   |   |   |   plurals.po
    |   |   |   |   |   resname.xlf
    |   |   |   |   |   resources-2.0-clean.xlf
    |   |   |   |   |   resources-2.0.xlf
    |   |   |   |   |   resources-clean.xlf
    |   |   |   |   |   resources-target-attributes.xlf
    |   |   |   |   |   resources-tool-info.xlf
    |   |   |   |   |   resources.csv
    |   |   |   |   |   resources.dump.json
    |   |   |   |   |   resources.ini
    |   |   |   |   |   resources.json
    |   |   |   |   |   resources.mo
    |   |   |   |   |   resources.php
    |   |   |   |   |   resources.po
    |   |   |   |   |   resources.ts
    |   |   |   |   |   resources.xlf
    |   |   |   |   |   resources.yml
    |   |   |   |   |   valid.csv
    |   |   |   |   |   with-attributes.xlf
    |   |   |   |   |   withdoctype.xlf
    |   |   |   |   |   withnote.xlf
    |   |   |   |   |   
    |   |   |   |   \---resourcebundle
    |   |   |   |       +---corrupted
    |   |   |   |       |       resources.dat
    |   |   |   |       |       
    |   |   |   |       +---dat
    |   |   |   |       |       en.res
    |   |   |   |       |       en.txt
    |   |   |   |       |       fr.res
    |   |   |   |       |       fr.txt
    |   |   |   |       |       packagelist.txt
    |   |   |   |       |       resources.dat
    |   |   |   |       |       
    |   |   |   |       \---res
    |   |   |   |               en.res
    |   |   |   |               
    |   |   |   +---Loader
    |   |   |   |       CsvFileLoaderTest.php
    |   |   |   |       IcuDatFileLoaderTest.php
    |   |   |   |       IcuResFileLoaderTest.php
    |   |   |   |       IniFileLoaderTest.php
    |   |   |   |       JsonFileLoaderTest.php
    |   |   |   |       LocalizedTestCase.php
    |   |   |   |       MoFileLoaderTest.php
    |   |   |   |       PhpFileLoaderTest.php
    |   |   |   |       PoFileLoaderTest.php
    |   |   |   |       QtFileLoaderTest.php
    |   |   |   |       XliffFileLoaderTest.php
    |   |   |   |       YamlFileLoaderTest.php
    |   |   |   |       
    |   |   |   +---Util
    |   |   |   |       ArrayConverterTest.php
    |   |   |   |       
    |   |   |   \---Writer
    |   |   |           TranslationWriterTest.php
    |   |   |           
    |   |   +---Util
    |   |   |       ArrayConverter.php
    |   |   |       
    |   |   \---Writer
    |   |           TranslationWriter.php
    |   |           
    |   +---var-dumper
    |   |   |   .gitignore
    |   |   |   CHANGELOG.md
    |   |   |   composer.json
    |   |   |   LICENSE
    |   |   |   phpunit.xml.dist
    |   |   |   README.md
    |   |   |   VarDumper.php
    |   |   |   
    |   |   +---Caster
    |   |   |       AmqpCaster.php
    |   |   |       ArgsStub.php
    |   |   |       Caster.php
    |   |   |       ClassStub.php
    |   |   |       ConstStub.php
    |   |   |       CutArrayStub.php
    |   |   |       CutStub.php
    |   |   |       DoctrineCaster.php
    |   |   |       DOMCaster.php
    |   |   |       EnumStub.php
    |   |   |       ExceptionCaster.php
    |   |   |       FrameStub.php
    |   |   |       LinkStub.php
    |   |   |       MongoCaster.php
    |   |   |       PdoCaster.php
    |   |   |       PgSqlCaster.php
    |   |   |       RedisCaster.php
    |   |   |       ReflectionCaster.php
    |   |   |       ResourceCaster.php
    |   |   |       SplCaster.php
    |   |   |       StubCaster.php
    |   |   |       SymfonyCaster.php
    |   |   |       TraceStub.php
    |   |   |       XmlReaderCaster.php
    |   |   |       XmlResourceCaster.php
    |   |   |       
    |   |   +---Cloner
    |   |   |       AbstractCloner.php
    |   |   |       ClonerInterface.php
    |   |   |       Cursor.php
    |   |   |       Data.php
    |   |   |       DumperInterface.php
    |   |   |       Stub.php
    |   |   |       VarCloner.php
    |   |   |       
    |   |   +---Dumper
    |   |   |       AbstractDumper.php
    |   |   |       CliDumper.php
    |   |   |       DataDumperInterface.php
    |   |   |       HtmlDumper.php
    |   |   |       
    |   |   +---Exception
    |   |   |       ThrowingCasterException.php
    |   |   |       
    |   |   +---Resources
    |   |   |   \---functions
    |   |   |           dump.php
    |   |   |           
    |   |   +---Test
    |   |   |       VarDumperTestTrait.php
    |   |   |       
    |   |   \---Tests
    |   |       +---Caster
    |   |       |       CasterTest.php
    |   |       |       ExceptionCasterTest.php
    |   |       |       PdoCasterTest.php
    |   |       |       RedisCasterTest.php
    |   |       |       ReflectionCasterTest.php
    |   |       |       SplCasterTest.php
    |   |       |       StubCasterTest.php
    |   |       |       XmlReaderCasterTest.php
    |   |       |       
    |   |       +---Cloner
    |   |       |       DataTest.php
    |   |       |       VarClonerTest.php
    |   |       |       
    |   |       +---Dumper
    |   |       |       CliDumperTest.php
    |   |       |       HtmlDumperTest.php
    |   |       |       
    |   |       +---Fixtures
    |   |       |       dumb-var.php
    |   |       |       FooInterface.php
    |   |       |       GeneratorDemo.php
    |   |       |       NotLoadableClass.php
    |   |       |       Twig.php
    |   |       |       xml_reader.xml
    |   |       |       
    |   |       \---Test
    |   |               VarDumperTestTraitTest.php
    |   |               
    |   \---yaml
    |       |   .gitignore
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   Dumper.php
    |       |   Escaper.php
    |       |   Inline.php
    |       |   LICENSE
    |       |   Parser.php
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   Unescaper.php
    |       |   Yaml.php
    |       |   
    |       +---Command
    |       |       LintCommand.php
    |       |       
    |       +---Exception
    |       |       DumpException.php
    |       |       ExceptionInterface.php
    |       |       ParseException.php
    |       |       RuntimeException.php
    |       |       
    |       +---Tag
    |       |       TaggedValue.php
    |       |       
    |       \---Tests
    |           |   DumperTest.php
    |           |   InlineTest.php
    |           |   ParseExceptionTest.php
    |           |   ParserTest.php
    |           |   YamlTest.php
    |           |   
    |           +---Command
    |           |       LintCommandTest.php
    |           |       
    |           \---Fixtures
    |                   arrow.gif
    |                   booleanMappingKeys.yml
    |                   embededPhp.yml
    |                   escapedCharacters.yml
    |                   index.yml
    |                   legacyBooleanMappingKeys.yml
    |                   legacyNonStringKeys.yml
    |                   legacyNullMappingKey.yml
    |                   multiple_lines_as_literal_block.yml
    |                   nonStringKeys.yml
    |                   nullMappingKey.yml
    |                   numericMappingKeys.yml
    |                   sfComments.yml
    |                   sfCompact.yml
    |                   sfMergeKey.yml
    |                   sfObjects.yml
    |                   sfQuotes.yml
    |                   sfTests.yml
    |                   unindentedCollections.yml
    |                   YtsAnchorAlias.yml
    |                   YtsBasicTests.yml
    |                   YtsBlockMapping.yml
    |                   YtsDocumentSeparator.yml
    |                   YtsErrorTests.yml
    |                   YtsFlowCollections.yml
    |                   YtsFoldedScalars.yml
    |                   YtsNullsAndEmpties.yml
    |                   YtsSpecificationExamples.yml
    |                   YtsTypeTransfers.yml
    |                   
    +---tijsverkoyen
    |   \---css-to-inline-styles
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .travis.yml
    |       |   CHANGELOG.md
    |       |   composer.json
    |       |   LICENSE.md
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---example
    |       |   |   index.php
    |       |   |   
    |       |   \---examples
    |       |       \---sumo
    |       |               index.htm
    |       |               style.css
    |       |               
    |       +---src
    |       |   |   CssToInlineStyles.php
    |       |   |   
    |       |   \---Css
    |       |       |   Processor.php
    |       |       |   
    |       |       +---Property
    |       |       |       Processor.php
    |       |       |       Property.php
    |       |       |       
    |       |       \---Rule
    |       |               Processor.php
    |       |               Rule.php
    |       |               
    |       \---tests
    |           |   CssToInlineStylesTest.php
    |           |   
    |           \---Css
    |               |   ProcessorTest.php
    |               |   test.css
    |               |   
    |               +---Property
    |               |       ProcessorTest.php
    |               |       PropertyTest.php
    |               |       
    |               \---Rule
    |                       ProcessorTest.php
    |                       RuleTest.php
    |                       
    +---vlucas
    |   \---phpdotenv
    |       |   .gitattributes
    |       |   .gitignore
    |       |   .travis.yml
    |       |   composer.json
    |       |   LICENSE.txt
    |       |   phpunit.xml.dist
    |       |   README.md
    |       |   
    |       +---src
    |       |   |   Dotenv.php
    |       |   |   Loader.php
    |       |   |   Validator.php
    |       |   |   
    |       |   \---Exception
    |       |           ExceptionInterface.php
    |       |           InvalidCallbackException.php
    |       |           InvalidFileException.php
    |       |           InvalidPathException.php
    |       |           ValidationException.php
    |       |           
    |       \---tests
    |           +---Dotenv
    |           |       DotenvTest.php
    |           |       LoaderTest.php
    |           |       
    |           \---fixtures
    |               |   .env
    |               |   
    |               +---env
    |               |       .env
    |               |       assertions.env
    |               |       commented.env
    |               |       exported.env
    |               |       immutable.env
    |               |       mutable.env
    |               |       nested.env
    |               |       quoted.env
    |               |       specialchars.env
    |               |       
    |               \---env-wrong
    |                       spaced-wrong.env
    |                       
    \---webmozart
        \---assert
            |   .composer-auth.json
            |   .gitignore
            |   .styleci.yml
            |   .travis.yml
            |   appveyor.yml
            |   CHANGELOG.md
            |   composer.json
            |   LICENSE
            |   phpunit.xml.dist
            |   README.md
            |   
            +---src
            |       Assert.php
            |       
            \---tests
                    AssertTest.php
                    

```