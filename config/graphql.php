<?php

return [
    /*
    |--------------------------------------------------------------------------
    | GraphQL endpoint
    |--------------------------------------------------------------------------
    |
    | The endpoint for the GraphQL server. By default, it is set to /graphql.
    |
    */

    'route_name' => '/graphql',

    /*
    |--------------------------------------------------------------------------
    | Schema declaration
    |--------------------------------------------------------------------------
    |
    | The path to your GraphQL schema declaration. This can be an absolute path
    | or relative to the root directory of your Laravel application.
    |
    */

    'schema' => [
        'register' => base_path('graphql/schema.graphql'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Resolvers
    |--------------------------------------------------------------------------
    |
    | The mapping of GraphQL types to their respective resolvers. Resolvers
    | are responsible for returning the data for a field or a mutation.
    |
    */

    'resolvers' => [
        'Query' => [
            'labTests'           => \App\GraphQL\Queries\LabTestQueries::class . '@labTests',
            'labTestsByCategory' => \App\GraphQL\Queries\LabTestQueries::class . '@labTestsByCategory',
        ],
        'Mutation' => [
            // 'submitMedicalTest'           => \App\GraphQL\Mutations\MedicalTestMutations::class . '@submitMedicalTest',
            // 'Mutation.submitLabTestEmail' => 'App\\GraphQL\\Resolvers\\EmailResolver@submitLabTestEmail',
            // 'Mutation.storeLabTestEmail'  => 'App\\GraphQL\\Resolvers\\EmailResolver@storeLabTestEmail',
            'submitData'                  => 'App\\GraphQL\\Resolvers\\EmailResolver@storeLabTestEmail',
            'submitData'                  => \App\GraphQL\Mutations\SubmitDataResolver::class . '@all',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Namespaces
    |--------------------------------------------------------------------------
    |
    | The namespaces where your GraphQL types, mutations, and directives are
    | located. By default, they are all located within the 'App\GraphQL'
    | namespace. You can customize this based on your preference.
    |
    */

    'namespaces' => [
        'models'     => 'App\\Models',
        'queries'    => 'App\\GraphQL\\Queries',
        'mutations'  => 'App\\GraphQL\\Mutations',
        'interfaces' => 'App\\GraphQL\\Interfaces',
        'unions'     => 'App\\GraphQL\\Unions',
        'scalars'    => 'App\\GraphQL\\Scalars',
        'directives' => 'App\\GraphQL\\Directives',
    ],

    /*
    |--------------------------------------------------------------------------
    | Global ID
    |--------------------------------------------------------------------------
    |
    | Whether to use a global ID field for Relay-style Node identification.
    | When enabled, you can add the `@globalId` directive to your types
    | and the package will automatically handle encoding/decoding.
    |
    */

    'global_id' => false,

    /*
    |--------------------------------------------------------------------------
    | Error Handling
    |--------------------------------------------------------------------------
    |
    | The configuration for GraphQL error handling. You can customize the
    | behavior when encountering errors during query execution.
    |
    */

    'error_handling' => [
        'debug'           => env('APP_DEBUG', false),
        'log'             => env('GRAPHQL_ERROR_LOG', true),
        'mask_exceptions' => env('GRAPHQL_ERROR_MASK_EXCEPTIONS', true),
    ],
];
