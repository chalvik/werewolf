<?php

namespace App\MoonShine\Resources;

use App\Models\News;
use App\Models\Page;
use MoonShine\Laravel\Enums\Action;
use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\Support\Attributes\Icon;
use MoonShine\Support\ListOf;
use MoonShine\TinyMce\Fields\TinyMce;
use MoonShine\UI\Components\Tabs;
use MoonShine\UI\Components\Tabs\Tab;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Textarea;

#[Icon('bookmark')]
/**
 * @extends ModelResource<News>
 */
class PagesResource extends ModelResource
{
    protected string $model = Page::class;

    protected string $column = 'name';

    protected bool $createInModal = true;

    protected bool $detailInModal = true;

    protected bool $editInModal = true;

    protected bool $cursorPaginate = true;

    public function getTitle(): string
    {
        return __('Страницы');
    }

    protected function activeActions(): ListOf
    {
        return parent::activeActions()->except(Action::VIEW);
    }

    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Image::make('Картинка', 'image'),
            Text::make('Заголовок', 'title'),
        ];
    }

    protected function detailFields(): iterable
    {
        return $this->indexFields();
    }

    protected function formFields(): iterable
    {
        return [
            Tabs::make([
                Tab::make('Основное', [
                    ID::make()->sortable(),
                    Text::make('Slug', 'slug')->nullable(),
                    Text::make('Заголовок', 'title')->required(),
                    Image::make('Картинка', 'image')
                        ->dir('/pages')
                        ->allowedExtensions(['jpg', 'gif', 'png']),
                    Textarea::make('Краткое содержжание', 'short_content')->required(),
                    TinyMce::make('Контент', 'content')->required(),
                ]),
                Tab::make('SEO', [
                    Text::make('Title', 'seo_title')->nullable(),
                    Text::make('Description', 'seo_description')->nullable(),
                    Text::make('Keywords', 'seo_keywords')->nullable(),
                ]),
            ]),
        ];
    }

    /**
     * @return array{name: array|string}
     */
    protected function rules($item): array
    {
        return [
            'title' => ['required', 'min:5'],
            'short_content' => ['required', 'min:5'],
            'content' => ['required', 'min:5'],
        ];
    }

    protected function search(): array
    {
        return [
            'id',
            'translation.title',
            'translation.short_content',
            'translation.content',
        ];
    }
}
