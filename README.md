# Documentation

<p align="center">
    <img src="/banner.png" />
</p>

## Custom Components

Throughout the docs, you'll notice that we make use of custom components, in addition to the default markdown, to render special elements. An overview of these can be found below:

### Rendering a Public REST API Tester

```blade
<livewire:endpoint spec="api/public-rest-api/endpoints/specs/blockchain.json" />
```

### Rendering a Page Reference

```blade
<livewire:page-reference page="/docs/delegate-registration" />
```

### Rendering an Embed Link

```blade
<livewire:embed-link url="https://blog.ark.io/ark-core-series-schnorrs-multisignatures-4979caac887a" caption="ARK Core - Schnorr" />
```

### Rendering a Sidebar Link

```blade
<x-general.sidebar-link path="/docs/api/public-rest-api/getting-started" name="Getting Started" />
```

### Rendering a Sidebar Link with Children

> The root `path` property should represent the closest parent of the child paths.

```blade
<x-general.sidebar-link
    path="/docs/api/public-rest-api/endpoints"
    name="Endpoints"
    :children="[
        ['path' => '/docs/api/public-rest-api/endpoints/blockchain', 'name' => 'Blockchain'],
        ['path' => '/docs/api/public-rest-api/endpoints/blocks', 'name' => 'Blocks'],
        ['path' => '/docs/api/public-rest-api/endpoints/delegates', 'name' => 'Delegates'],
        ['path' => '/docs/api/public-rest-api/endpoints/node', 'name' => 'Node'],
        ['path' => '/docs/api/public-rest-api/endpoints/peers', 'name' => 'Peers'],
        ['path' => '/docs/api/public-rest-api/endpoints/transactions', 'name' => 'Transactions'],
        ['path' => '/docs/api/public-rest-api/endpoints/votes', 'name' => 'Votes'],
        ['path' => '/docs/api/public-rest-api/endpoints/wallets', 'name' => 'Wallets'],
    ]"
/>
```

### Rendering an Alert

> Type can be `info`, `success`, `warning` or `danger`.

```blade
<x-alert type="info">
Hello World!
</x-alert>
```

### Rendering a Link Collection

```blade
<x-link-collection
    :links="[
        ['path' => '/docs/core/overview/services/attributes', 'name' => 'Attributes'],
        ['path' => '/docs/core/overview/services/cache', 'name' => 'Cache'],
        ['path' => '/docs/core/overview/services/events', 'name' => 'Events'],
        ['path' => '/docs/core/overview/services/filesystem', 'name' => 'Filesystem'],
        ['path' => '/docs/core/overview/services/logging', 'name' => 'Logging'],
        ['path' => '/docs/core/overview/services/mixins', 'name' => 'Mixins'],
        ['path' => '/docs/core/overview/services/pipeline', 'name' => 'Pipeline'],
        ['path' => '/docs/core/overview/services/queue', 'name' => 'Queue'],
        ['path' => '/docs/core/overview/services/schedule', 'name' => 'Schedule'],
        ['path' => '/docs/core/overview/services/triggers', 'name' => 'Triggers'],
        ['path' => '/docs/core/overview/services/validation', 'name' => 'Validation'],
    ]"
/>
```

### Documentation Pages

Documentation pages have a title property that is used for example used for the navigation at the bottom of the pages.

```text
---
title: <text>
---
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to security@ark.io. All security vulnerabilities will be promptly addressed.

## Credits

This project exists thanks to all the people who [contribute](../../contributors).

## License

[MIT](LICENSE) ?? [Payvo](https://payvo.com)
