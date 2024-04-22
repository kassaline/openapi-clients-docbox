# 1. openapi-generator-cli aufrufen

```openapi-generator-cli generate -g php --invoker-package OpenAPI\Client\Docbox -i openapi-docbox.json  -o ./ -p  ariableNamingConvention=camelCase -p composerPackageName=kassaline/openapi-clients-docbox```

# 2. rector upgrade auf php8.3 ausführen

```vendor/bin/rector```
