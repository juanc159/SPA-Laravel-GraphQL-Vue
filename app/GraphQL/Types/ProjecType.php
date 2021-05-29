<?php

namespace App\GraphQL\Type;
use App\Models\Project;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;


class ProjectType extends GraphQLType{
    protected $attributes = [
        'name' => 'Project',
        'description' => 'A Project Type',
        'model' => Project::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'the Project Id'
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'the Project Title'
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'the Project Description'
            ],
            /*'manager' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'the Project Id'
            ],
            'task' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'the Project Id'
            ],*/
        ];
    }
}