<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Resource;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sharedHoverDesc = "For many Micro, Small, and Medium Enterprises (MSMEs), outdated legacy systems often hinder growth, agility, and innovation. Moving to the cloud isn't just a tech upgrade — it's a strategic shift that enables cost savings, real-time collaboration, data-driven decisions, and scalability. This article explores a step-by-step approach to help MSMEs migrate confidently, covering common challenges, budget-friendly solutions, and best practices to ensure a smooth digital transformation journey.";

        $resources = [
            [
                'category'          => 'PERSPECTIVE',
                'title'             => 'The Rise of SaaS Startups in India: Opportunities & Challenges',
                'description'       => null,
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => 'asset/image/bg/resources-perspective.png',
                'order_index'       => 1,
            ],
            [
                'category'          => 'ARTICLE',
                'title'             => 'Top 5 Tech Trends Reshaping the Digital Landscape in 2025',
                'description'       => 'Explore how AI, automation, and no-code platforms are changing how digital products are built.',
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => 'asset/image/bg/resources-article.png',
                'order_index'       => 2,
            ],
            [
                'category'          => 'CASE STUDY',
                'title'             => 'How to Build a Future-Ready Digital Team',
                'description'       => null,
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => 'asset/image/bg/industry-page-box-3.png',
                'order_index'       => 3,
            ],
            [
                'category'          => 'CASE STUDY',
                'title'             => $sharedHoverDesc,
                'description'       => 'EXPAND',
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => null,
                'order_index'       => 4,
            ],
            [
                'category'          => 'PERSPECTIVE',
                'title'             => 'Understanding Product-Market Fit in the SaaS World',
                'description'       => 'A framework for early-stage companies to validate ideas before scaling.',
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => 'asset/image/bg/resources-perspective-2.png',
                'order_index'       => 5,
            ],
            [
                'category'          => 'ARTICLE',
                'title'             => 'The Role of Cybersecurity in SaaS-based Infrastructure',
                'description'       => 'Why protecting data and customer trust is more critical than ever.',
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => 'asset/image/bg/resources-article-2.png',
                'order_index'       => 6,
            ],
            [
                'category'          => 'CASE STUDY',
                'title'             => 'Why UX Strategy is a Game-Changer for Enterprise Platforms',
                'description'       => 'Why protecting data and customer trust is more critical than ever.',
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => 'asset/image/bg/industry-page-box-5.png',
                'order_index'       => 7,
            ],
            [
                'category'          => 'CASE STUDY',
                'title'             => 'From Legacy to Cloud: Navigating the Transition for MSMEs',
                'description'       => 'Why protecting data and customer trust is more critical than ever.',
                'hover_category'    => 'CASE STUDY',
                'hover_description' => $sharedHoverDesc,
                'image'             => 'asset/image/bg/industry-page-box-6.png',
                'order_index'       => 8,
            ],
        ];

        foreach ($resources as $resource) {
            Resource::create($resource);
        }
    }
}
