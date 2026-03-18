<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InsightBlog;
use Illuminate\Support\Str;

class InsightBlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blogs = [
            [
                'name'    => 'High Lights',
                'slug'    => 'high-lights',
                'image'   => 'asset/image/bg/blog-highlights.png',
                'content' => '<p>Extended reality (XR), which includes AR, VR, and MR, has the potential to transform customer-facing enterprises by offering immersive and engaging virtual experiences.</p>
                             <p>For a well-known jewelry business in India, TCS produced a 3D virtual store tour and a 360-degree experience of the NYC Marathon.</p>
                             <p>VR will also assist lower operating expenses and the carbon impact of enterprises in a variety of ways.</p>',
                'is_active' => true,
            ],
            [
                'name'    => 'Presenting the other domain',
                'slug'    => 'other-domain',
                'image'   => 'asset/image/bg/blog-other-domain.png',
                'content' => '<p>The metaverse is becoming more and more noticeable in both business and everyday life, and it is expected to establish itself as a kind of fixture for next generations. The Metaverse, which is based on Virtual Reality (VR), Augmented Reality (AR), and Mixed Reality (MR), is creating new opportunities for lifelike experiences in addition to a new digital and social environment.</p>
                             <p>Significant progress has been achieved in the immersive technologies field by TCS Interactive and TCS AvapresenceTM, a TCS platform to design, implement, and scale digital innovation—both disruptive and incremental. This encompasses AR, VR, and MR, all of which are included in the XR category...</p>',
                'is_active' => true,
            ],
            [
                'name'    => 'Extend the ordinary',
                'slug'    => 'extend-the-ordinary',
                'image'   => 'asset/image/bg/blog-orinary1.png',
                'content' => '<p>By fusing the virtual and "real" worlds or by producing an entirely immersive experience, all immersive technologies enhance the reality we see. AR and MR offer an expanded reality by combining the physical and digital worlds, whereas VR is a totally artificial medium that lets people fully immerse themselves in an experience.</p>
                             <p>Applying XR to corporate processes, particularly those that interact with customers, leads to increased user engagement, lower operating costs, training programs for employees and classrooms, the provision of unique and personalized experiences, and remote data access.</p>
                             <h4>Using VR to achieve green aims</h4>
                             <p>The most relevant of all the innovative uses of virtual reality is its effect on environmental sustainability. As VR replaces procedures in a variety of industrial verticals, it reduces carbon footprints. It also facilitates the assimilation of input. VR is essential to reaching "green" objectives at a time when industries are working to achieve net zero and implement sustainable models at the local level.</p>',
                'is_active' => true,
            ],
            [
                'name'    => 'Effective strategy quote',
                'slug'    => 'strategy-quote',
                'image'   => null,
                'content' => '<p>“ One of the most <span>effective strategies</span> for reaching clients and selling wedding jewelry is this idea. Every day, more than <br><span>3,000 clients</span> <br> visit our Company, which give them a distinctive and striking opportunity to view our brand. ”</p>',
                'is_active' => true,
            ],
        ];

        foreach ($blogs as $blog) {
            InsightBlog::updateOrCreate(['slug' => $blog['slug']], $blog);
        }
    }
}
