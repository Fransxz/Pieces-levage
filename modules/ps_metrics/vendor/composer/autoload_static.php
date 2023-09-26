<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit334b1d9421703618d9169c9fd49c0619
{
    public static $files = array (
        '9c67151ae59aff4788964ce8eb2a0f43' => __DIR__ . '/..' . '/clue/stream-filter/src/functions_include.php',
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '8cff32064859f4559445b89279f3199c' => __DIR__ . '/..' . '/php-http/message/src/filters.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '2a9afd012ba84c341672875ae49cd5cd' => __DIR__ . '/..' . '/segmentio/analytics-php/lib/Segment.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Prestashop\\ModuleLibGuzzleAdapter\\' => 34,
            'PrestaShop\\PsAccountsInstaller\\' => 31,
            'PrestaShop\\Module\\Ps_metrics\\' => 29,
            'PrestaShop\\ModuleLibServiceContainer\\' => 37,
            'PrestaShop\\ModuleLibCacheDirectoryProvider\\' => 43,
            'PhpOption\\' => 10,
        ),
        'H' => 
        array (
            'Http\\Promise\\' => 13,
            'Http\\Message\\' => 13,
            'Http\\Client\\' => 12,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'C' => 
        array (
            'Clue\\StreamFilter\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Prestashop\\ModuleLibGuzzleAdapter\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src',
        ),
        'PrestaShop\\PsAccountsInstaller\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src',
        ),
        'PrestaShop\\Module\\Ps_metrics\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'PrestaShop\\ModuleLibServiceContainer\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/module-lib-service-container/src',
        ),
        'PrestaShop\\ModuleLibCacheDirectoryProvider\\' => 
        array (
            0 => __DIR__ . '/..' . '/prestashop/module-lib-cache-directory-provider/src',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'Http\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/promise/src',
        ),
        'Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/message/src',
            1 => __DIR__ . '/..' . '/php-http/message-factory/src',
        ),
        'Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-http/httplug/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Clue\\StreamFilter\\' => 
        array (
            0 => __DIR__ . '/..' . '/clue/stream-filter/src',
        ),
    );

    public static $classMap = array (
        'Clue\\StreamFilter\\CallbackFilter' => __DIR__ . '/..' . '/clue/stream-filter/src/CallbackFilter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Environment\\AbstractVariables' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/AbstractVariables.php',
        'Dotenv\\Environment\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/Adapter/AdapterInterface.php',
        'Dotenv\\Environment\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/Adapter/ApacheAdapter.php',
        'Dotenv\\Environment\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/Adapter/ArrayAdapter.php',
        'Dotenv\\Environment\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/Adapter/EnvConstAdapter.php',
        'Dotenv\\Environment\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/Adapter/PutenvAdapter.php',
        'Dotenv\\Environment\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/Adapter/ServerConstAdapter.php',
        'Dotenv\\Environment\\DotenvFactory' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/DotenvFactory.php',
        'Dotenv\\Environment\\DotenvVariables' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/DotenvVariables.php',
        'Dotenv\\Environment\\FactoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/FactoryInterface.php',
        'Dotenv\\Environment\\VariablesInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Environment/VariablesInterface.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Lines.php',
        'Dotenv\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader.php',
        'Dotenv\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser.php',
        'Dotenv\\Regex\\Error' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Regex/Error.php',
        'Dotenv\\Regex\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Regex/Regex.php',
        'Dotenv\\Regex\\Result' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Regex/Result.php',
        'Dotenv\\Regex\\Success' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Regex/Success.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\Exception\\MalformedUriException' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Exception/MalformedUriException.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\Header' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Header.php',
        'GuzzleHttp\\Psr7\\HttpFactory' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/HttpFactory.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\Message' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Message.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MimeType' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MimeType.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Query' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Query.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriComparator' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriComparator.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\Psr7\\Utils' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Utils.php',
        'Http\\Client\\Exception' => __DIR__ . '/..' . '/php-http/httplug/src/Exception.php',
        'Http\\Client\\Exception\\HttpException' => __DIR__ . '/..' . '/php-http/httplug/src/Exception/HttpException.php',
        'Http\\Client\\Exception\\NetworkException' => __DIR__ . '/..' . '/php-http/httplug/src/Exception/NetworkException.php',
        'Http\\Client\\Exception\\RequestAwareTrait' => __DIR__ . '/..' . '/php-http/httplug/src/Exception/RequestAwareTrait.php',
        'Http\\Client\\Exception\\RequestException' => __DIR__ . '/..' . '/php-http/httplug/src/Exception/RequestException.php',
        'Http\\Client\\Exception\\TransferException' => __DIR__ . '/..' . '/php-http/httplug/src/Exception/TransferException.php',
        'Http\\Client\\HttpAsyncClient' => __DIR__ . '/..' . '/php-http/httplug/src/HttpAsyncClient.php',
        'Http\\Client\\HttpClient' => __DIR__ . '/..' . '/php-http/httplug/src/HttpClient.php',
        'Http\\Client\\Promise\\HttpFulfilledPromise' => __DIR__ . '/..' . '/php-http/httplug/src/Promise/HttpFulfilledPromise.php',
        'Http\\Client\\Promise\\HttpRejectedPromise' => __DIR__ . '/..' . '/php-http/httplug/src/Promise/HttpRejectedPromise.php',
        'Http\\Message\\Authentication' => __DIR__ . '/..' . '/php-http/message/src/Authentication.php',
        'Http\\Message\\Authentication\\AutoBasicAuth' => __DIR__ . '/..' . '/php-http/message/src/Authentication/AutoBasicAuth.php',
        'Http\\Message\\Authentication\\BasicAuth' => __DIR__ . '/..' . '/php-http/message/src/Authentication/BasicAuth.php',
        'Http\\Message\\Authentication\\Bearer' => __DIR__ . '/..' . '/php-http/message/src/Authentication/Bearer.php',
        'Http\\Message\\Authentication\\Chain' => __DIR__ . '/..' . '/php-http/message/src/Authentication/Chain.php',
        'Http\\Message\\Authentication\\Header' => __DIR__ . '/..' . '/php-http/message/src/Authentication/Header.php',
        'Http\\Message\\Authentication\\Matching' => __DIR__ . '/..' . '/php-http/message/src/Authentication/Matching.php',
        'Http\\Message\\Authentication\\QueryParam' => __DIR__ . '/..' . '/php-http/message/src/Authentication/QueryParam.php',
        'Http\\Message\\Authentication\\RequestConditional' => __DIR__ . '/..' . '/php-http/message/src/Authentication/RequestConditional.php',
        'Http\\Message\\Authentication\\Wsse' => __DIR__ . '/..' . '/php-http/message/src/Authentication/Wsse.php',
        'Http\\Message\\Builder\\ResponseBuilder' => __DIR__ . '/..' . '/php-http/message/src/Builder/ResponseBuilder.php',
        'Http\\Message\\Cookie' => __DIR__ . '/..' . '/php-http/message/src/Cookie.php',
        'Http\\Message\\CookieJar' => __DIR__ . '/..' . '/php-http/message/src/CookieJar.php',
        'Http\\Message\\CookieUtil' => __DIR__ . '/..' . '/php-http/message/src/CookieUtil.php',
        'Http\\Message\\Decorator\\MessageDecorator' => __DIR__ . '/..' . '/php-http/message/src/Decorator/MessageDecorator.php',
        'Http\\Message\\Decorator\\RequestDecorator' => __DIR__ . '/..' . '/php-http/message/src/Decorator/RequestDecorator.php',
        'Http\\Message\\Decorator\\ResponseDecorator' => __DIR__ . '/..' . '/php-http/message/src/Decorator/ResponseDecorator.php',
        'Http\\Message\\Decorator\\StreamDecorator' => __DIR__ . '/..' . '/php-http/message/src/Decorator/StreamDecorator.php',
        'Http\\Message\\Encoding\\ChunkStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/ChunkStream.php',
        'Http\\Message\\Encoding\\CompressStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/CompressStream.php',
        'Http\\Message\\Encoding\\DechunkStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/DechunkStream.php',
        'Http\\Message\\Encoding\\DecompressStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/DecompressStream.php',
        'Http\\Message\\Encoding\\DeflateStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/DeflateStream.php',
        'Http\\Message\\Encoding\\Filter\\Chunk' => __DIR__ . '/..' . '/php-http/message/src/Encoding/Filter/Chunk.php',
        'Http\\Message\\Encoding\\FilteredStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/FilteredStream.php',
        'Http\\Message\\Encoding\\GzipDecodeStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/GzipDecodeStream.php',
        'Http\\Message\\Encoding\\GzipEncodeStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/GzipEncodeStream.php',
        'Http\\Message\\Encoding\\InflateStream' => __DIR__ . '/..' . '/php-http/message/src/Encoding/InflateStream.php',
        'Http\\Message\\Exception' => __DIR__ . '/..' . '/php-http/message/src/Exception.php',
        'Http\\Message\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/php-http/message/src/Exception/UnexpectedValueException.php',
        'Http\\Message\\Formatter' => __DIR__ . '/..' . '/php-http/message/src/Formatter.php',
        'Http\\Message\\Formatter\\CurlCommandFormatter' => __DIR__ . '/..' . '/php-http/message/src/Formatter/CurlCommandFormatter.php',
        'Http\\Message\\Formatter\\FullHttpMessageFormatter' => __DIR__ . '/..' . '/php-http/message/src/Formatter/FullHttpMessageFormatter.php',
        'Http\\Message\\Formatter\\SimpleFormatter' => __DIR__ . '/..' . '/php-http/message/src/Formatter/SimpleFormatter.php',
        'Http\\Message\\MessageFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/MessageFactory.php',
        'Http\\Message\\MessageFactory\\DiactorosMessageFactory' => __DIR__ . '/..' . '/php-http/message/src/MessageFactory/DiactorosMessageFactory.php',
        'Http\\Message\\MessageFactory\\GuzzleMessageFactory' => __DIR__ . '/..' . '/php-http/message/src/MessageFactory/GuzzleMessageFactory.php',
        'Http\\Message\\MessageFactory\\SlimMessageFactory' => __DIR__ . '/..' . '/php-http/message/src/MessageFactory/SlimMessageFactory.php',
        'Http\\Message\\RequestFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/RequestFactory.php',
        'Http\\Message\\RequestMatcher' => __DIR__ . '/..' . '/php-http/message/src/RequestMatcher.php',
        'Http\\Message\\RequestMatcher\\CallbackRequestMatcher' => __DIR__ . '/..' . '/php-http/message/src/RequestMatcher/CallbackRequestMatcher.php',
        'Http\\Message\\RequestMatcher\\RegexRequestMatcher' => __DIR__ . '/..' . '/php-http/message/src/RequestMatcher/RegexRequestMatcher.php',
        'Http\\Message\\RequestMatcher\\RequestMatcher' => __DIR__ . '/..' . '/php-http/message/src/RequestMatcher/RequestMatcher.php',
        'Http\\Message\\ResponseFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/ResponseFactory.php',
        'Http\\Message\\StreamFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/StreamFactory.php',
        'Http\\Message\\StreamFactory\\DiactorosStreamFactory' => __DIR__ . '/..' . '/php-http/message/src/StreamFactory/DiactorosStreamFactory.php',
        'Http\\Message\\StreamFactory\\GuzzleStreamFactory' => __DIR__ . '/..' . '/php-http/message/src/StreamFactory/GuzzleStreamFactory.php',
        'Http\\Message\\StreamFactory\\SlimStreamFactory' => __DIR__ . '/..' . '/php-http/message/src/StreamFactory/SlimStreamFactory.php',
        'Http\\Message\\Stream\\BufferedStream' => __DIR__ . '/..' . '/php-http/message/src/Stream/BufferedStream.php',
        'Http\\Message\\UriFactory' => __DIR__ . '/..' . '/php-http/message-factory/src/UriFactory.php',
        'Http\\Message\\UriFactory\\DiactorosUriFactory' => __DIR__ . '/..' . '/php-http/message/src/UriFactory/DiactorosUriFactory.php',
        'Http\\Message\\UriFactory\\GuzzleUriFactory' => __DIR__ . '/..' . '/php-http/message/src/UriFactory/GuzzleUriFactory.php',
        'Http\\Message\\UriFactory\\SlimUriFactory' => __DIR__ . '/..' . '/php-http/message/src/UriFactory/SlimUriFactory.php',
        'Http\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/php-http/promise/src/FulfilledPromise.php',
        'Http\\Promise\\Promise' => __DIR__ . '/..' . '/php-http/promise/src/Promise.php',
        'Http\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/php-http/promise/src/RejectedPromise.php',
        'PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'PrestaShop\\ModuleLibCacheDirectoryProvider\\Cache\\CacheDirectoryProvider' => __DIR__ . '/..' . '/prestashop/module-lib-cache-directory-provider/src/Cache/CacheDirectoryProvider.php',
        'PrestaShop\\ModuleLibServiceContainer\\DependencyInjection\\ContainerProvider' => __DIR__ . '/..' . '/prestashop/module-lib-service-container/src/DependencyInjection/ContainerProvider.php',
        'PrestaShop\\ModuleLibServiceContainer\\DependencyInjection\\ServiceContainer' => __DIR__ . '/..' . '/prestashop/module-lib-service-container/src/DependencyInjection/ServiceContainer.php',
        'PrestaShop\\Module\\Ps_metrics\\Adapter\\LoggerAdapter' => __DIR__ . '/../..' . '/src/Adapter/LoggerAdapter.php',
        'PrestaShop\\Module\\Ps_metrics\\Api\\AnalyticsApi' => __DIR__ . '/../..' . '/src/Api/AnalyticsApi.php',
        'PrestaShop\\Module\\Ps_metrics\\Api\\Client\\AnalyticsClient' => __DIR__ . '/../..' . '/src/Api/Client/AnalyticsClient.php',
        'PrestaShop\\Module\\Ps_metrics\\Api\\Client\\HttpClient' => __DIR__ . '/../..' . '/src/Api/Client/HttpClient.php',
        'PrestaShop\\Module\\Ps_metrics\\Api\\Client\\HttpFactory' => __DIR__ . '/../..' . '/src/Api/Client/HttpFactory.php',
        'PrestaShop\\Module\\Ps_metrics\\Api\\HttpApi' => __DIR__ . '/../..' . '/src/Api/HttpApi.php',
        'PrestaShop\\Module\\Ps_metrics\\Config\\Env' => __DIR__ . '/../..' . '/src/Config/Env.php',
        'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsController' => __DIR__ . '/../..' . '/src/Controller/Admin/MetricsController.php',
        'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsLegacyStatsController' => __DIR__ . '/../..' . '/src/Controller/Admin/MetricsLegacyStatsController.php',
        'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsOauthController' => __DIR__ . '/../..' . '/src/Controller/Admin/MetricsOauthController.php',
        'PrestaShop\\Module\\Ps_metrics\\Controller\\Admin\\MetricsResolverController' => __DIR__ . '/../..' . '/src/Controller/Admin/MetricsResolverController.php',
        'PrestaShop\\Module\\Ps_metrics\\Handler\\GuzzleApiResponseExceptionHandler' => __DIR__ . '/../..' . '/src/Handler/GuzzleApiResponseExceptionHandler.php',
        'PrestaShop\\Module\\Ps_metrics\\Handler\\NativeStatsHandler' => __DIR__ . '/../..' . '/src/Handler/NativeStatsHandler.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\ApiHelper' => __DIR__ . '/../..' . '/src/Helper/ApiHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\ConfigHelper' => __DIR__ . '/../..' . '/src/Helper/ConfigHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\DbHelper' => __DIR__ . '/../..' . '/src/Helper/DbHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\JsonHelper' => __DIR__ . '/../..' . '/src/Helper/JsonHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\ModuleHelper' => __DIR__ . '/../..' . '/src/Helper/ModuleHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\MultishopHelper' => __DIR__ . '/../..' . '/src/Helper/MultishopHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\NumberHelper' => __DIR__ . '/../..' . '/src/Helper/NumberHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\PrestaShopHelper' => __DIR__ . '/../..' . '/src/Helper/PrestaShopHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\SegmentHelper' => __DIR__ . '/../..' . '/src/Helper/SegmentHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\ShopHelper' => __DIR__ . '/../..' . '/src/Helper/ShopHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\Helper\\ToolsHelper' => __DIR__ . '/../..' . '/src/Helper/ToolsHelper.php',
        'PrestaShop\\Module\\Ps_metrics\\LegacyModuleInstaller' => __DIR__ . '/../..' . '/src/LegacyModuleInstaller.php',
        'PrestaShop\\Module\\Ps_metrics\\Middleware\\CheckResponseMiddleware' => __DIR__ . '/../..' . '/src/Middleware/CheckResponseMiddleware.php',
        'PrestaShop\\Module\\Ps_metrics\\Middleware\\LogMiddleware' => __DIR__ . '/../..' . '/src/Middleware/LogMiddleware.php',
        'PrestaShop\\Module\\Ps_metrics\\Middleware\\Middleware' => __DIR__ . '/../..' . '/src/Middleware/Middleware.php',
        'PrestaShop\\Module\\Ps_metrics\\Middleware\\ResponseMiddleware' => __DIR__ . '/../..' . '/src/Middleware/ResponseMiddleware.php',
        'PrestaShop\\Module\\Ps_metrics\\Middleware\\SentryMiddleware' => __DIR__ . '/../..' . '/src/Middleware/SentryMiddleware.php',
        'PrestaShop\\Module\\Ps_metrics\\Module\\GAInstaller' => __DIR__ . '/../..' . '/src/Module/GAInstaller.php',
        'PrestaShop\\Module\\Ps_metrics\\Module\\Install' => __DIR__ . '/../..' . '/src/Module/Install.php',
        'PrestaShop\\Module\\Ps_metrics\\Module\\Uninstall' => __DIR__ . '/../..' . '/src/Module/Uninstall.php',
        'PrestaShop\\Module\\Ps_metrics\\Module\\Upgrade' => __DIR__ . '/../..' . '/src/Module/Upgrade.php',
        'PrestaShop\\Module\\Ps_metrics\\Presenter\\FaqPresenter' => __DIR__ . '/../..' . '/src/Presenter/FaqPresenter.php',
        'PrestaShop\\Module\\Ps_metrics\\Presenter\\ShopDataPresenter' => __DIR__ . '/../..' . '/src/Presenter/ShopDataPresenter.php',
        'PrestaShop\\Module\\Ps_metrics\\Provider\\AnalyticsAccountsListProvider' => __DIR__ . '/../..' . '/src/Provider/AnalyticsAccountsListProvider.php',
        'PrestaShop\\Module\\Ps_metrics\\Repository\\ConfigurationRepository' => __DIR__ . '/../..' . '/src/Repository/ConfigurationRepository.php',
        'PrestaShop\\Module\\Ps_metrics\\Repository\\HookModuleRepository' => __DIR__ . '/../..' . '/src/Repository/HookModuleRepository.php',
        'PrestaShop\\Module\\Ps_metrics\\Repository\\OrderRepository' => __DIR__ . '/../..' . '/src/Repository/OrderRepository.php',
        'PrestaShop\\Module\\Ps_metrics\\StatsTabManager' => __DIR__ . '/../..' . '/src/StatsTabManager.php',
        'PrestaShop\\Module\\Ps_metrics\\Tracker\\Segment' => __DIR__ . '/../..' . '/src/Tracker/Segment.php',
        'PrestaShop\\Module\\Ps_metrics\\Tracker\\TrackerInterface' => __DIR__ . '/../..' . '/src/Tracker/TrackerInterface.php',
        'PrestaShop\\Module\\Ps_metrics\\Validation\\SelectAccountAnalytics' => __DIR__ . '/../..' . '/src/Validation/SelectAccountAnalytics.php',
        'PrestaShop\\PsAccountsInstaller\\Installer\\Exception\\InstallerException' => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src/Installer/Exception/InstallerException.php',
        'PrestaShop\\PsAccountsInstaller\\Installer\\Exception\\ModuleNotInstalledException' => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src/Installer/Exception/ModuleNotInstalledException.php',
        'PrestaShop\\PsAccountsInstaller\\Installer\\Exception\\ModuleVersionException' => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src/Installer/Exception/ModuleVersionException.php',
        'PrestaShop\\PsAccountsInstaller\\Installer\\Facade\\PsAccounts' => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src/Installer/Facade/PsAccounts.php',
        'PrestaShop\\PsAccountsInstaller\\Installer\\Installer' => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src/Installer/Installer.php',
        'PrestaShop\\PsAccountsInstaller\\Installer\\Presenter\\InstallerPresenter' => __DIR__ . '/..' . '/prestashop/prestashop-accounts-installer/src/Installer/Presenter/InstallerPresenter.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\ClientFactory' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/ClientFactory.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\ConfigInterface' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/ConfigInterface.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\Guzzle5\\Client' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/Guzzle5/Client.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\Guzzle5\\Config' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/Guzzle5/Config.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\Guzzle7\\Client' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/Guzzle7/Client.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\Guzzle7\\Config' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/Guzzle7/Config.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\Guzzle7\\Exception\\UnexpectedValueException' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/Guzzle7/Exception/UnexpectedValueException.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\Guzzle7\\Promise' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/Guzzle7/Promise.php',
        'Prestashop\\ModuleLibGuzzleAdapter\\VersionDetection' => __DIR__ . '/..' . '/prestashop/module-lib-guzzle-adapter/src/VersionDetection.php',
        'Ps_metrics' => __DIR__ . '/../..' . '/ps_metrics.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/RequestFactoryInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ResponseFactoryInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/ServerRequestFactoryInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/StreamFactoryInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UploadedFileFactoryInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriFactoryInterface' => __DIR__ . '/..' . '/psr/http-factory/src/UriFactoryInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit334b1d9421703618d9169c9fd49c0619::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit334b1d9421703618d9169c9fd49c0619::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit334b1d9421703618d9169c9fd49c0619::$classMap;

        }, null, ClassLoader::class);
    }
}
