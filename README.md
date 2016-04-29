

# :wp-init

Small add-on to use WordPress as a back-end for a php site

## Example use 

For displaying certain post or page by using pid  for instance p = 100  : 


```php
require_once("init.php");
echo "<title>  wptitle(100);  </title>"; // displays the title for post 100 
echo "<title>  wpcon(100);  </title>";   // displays the content for post 100 
```


For displaying a form made by contact form - 7  : 


```php
require_once("init.php");
echo "<title> Contant form </title>";
usetheme();
usethemeheader();
get_header();
$shortcode = '[contact-form-7 id="70" title="Untitled"]';
wpsc($shortcode);
get_footer();
```


## Credits

- [:author_name][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/:vendor/:package_name.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/:vendor/:package_name/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/:vendor/:package_name.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/:vendor/:package_name
[link-travis]: https://travis-ci.org/:vendor/:package_name
[link-scrutinizer]: https://scrutinizer-ci.com/g/:vendor/:package_name/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/:vendor/:package_name
[link-downloads]: https://packagist.org/packages/:vendor/:package_name
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors




