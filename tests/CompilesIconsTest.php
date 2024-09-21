<?php

declare(strict_types=1);

namespace Smarteknoloji\BladeCircleFlags\Tests;

use BladeUI\Icons\BladeIconsServiceProvider;
use Orchestra\Testbench\TestCase;
use Smarteknoloji\BladeCircleFlags\BladeCircleFlagsServiceProvider;

class CompilesIconsTest extends TestCase
{
    /** @test */
    public function it_compiles_a_single_anonymous_component()
    {
        $result = svg('circleflag-l-tr')->toHtml();

        // Note: the empty class here seems to be a Blade components bug.
        $expected = <<<'SVG'
            <svg xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><mask id="a"><circle cx="256" cy="256" r="256" fill="#fff"/></mask><g mask="url(#a)"><path fill="#d80027" d="M0 0h512v512H0z"/><g fill="#eee"><path d="m350 182 33 46 54-18-33 46 33 46-54-18-33 46v-57l-54-17 54-18v-56Z"/><path d="M260 370a114 114 0 1 1 54-215 141 141 0 1 0 0 202c-17 9-35 13-54 13Z"/></g></g></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_classes_to_icons()
    {
        $result = svg('circleflag-l-tr', 'w-6 h-6 text-gray-500')->toHtml();

        $expected = <<<'SVG'
            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><mask id="a"><circle cx="256" cy="256" r="256" fill="#fff"/></mask><g mask="url(#a)"><path fill="#d80027" d="M0 0h512v512H0z"/><g fill="#eee"><path d="m350 182 33 46 54-18-33 46 33 46-54-18-33 46v-57l-54-17 54-18v-56Z"/><path d="M260 370a114 114 0 1 1 54-215 141 141 0 1 0 0 202c-17 9-35 13-54 13Z"/></g></g></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function it_can_add_styles_to_icons()
    {
        $result = svg('circleflag-l-tr', ['style' => 'color: #555'])->toHtml();

        $expected = <<<'SVG'
            <svg style="color: #555" xmlns="http://www.w3.org/2000/svg" width="512" height="512" viewBox="0 0 512 512"><mask id="a"><circle cx="256" cy="256" r="256" fill="#fff"/></mask><g mask="url(#a)"><path fill="#d80027" d="M0 0h512v512H0z"/><g fill="#eee"><path d="m350 182 33 46 54-18-33 46 33 46-54-18-33 46v-57l-54-17 54-18v-56Z"/><path d="M260 370a114 114 0 1 1 54-215 141 141 0 1 0 0 202c-17 9-35 13-54 13Z"/></g></g></svg>
            SVG;

        $this->assertSame($expected, $result);
    }

    protected function getPackageProviders($app)
    {
        return [
            BladeIconsServiceProvider::class,
            BladeCircleFlagsServiceProvider::class,
        ];
    }
}
