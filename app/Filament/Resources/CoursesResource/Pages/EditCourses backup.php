<?php
 
namespace App\Http\Livewire;
 
use App\Models\Courses;
use Filament\Forms;
use Illuminate\Contracts\View\View;
use Livewire\Component;
 
class EditCourses extends Component implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;
 
    public Courses $post;
 
    public $title;
    public $content;
    public $categories;
 
    public function mount(): void
    {
        $this->form->fill([
            'course_title'   => $this->post->title,
            'course_description' => $this->post->content,
        ]);
    }
 
    protected function getFormSchema(): array
    {
        return [
            Forms\Components\TextInput::make( 'course_title' )->required(),
            Forms\Components\MarkdownEditor::make( 'course_description' ),
            Forms\Components\BelongsToManyMultiSelect::make( 'categories' )->relationship( 'categories', 'category_name' ),
        ];
    }
 
    protected function getFormModel(): Post 
    {
        return $this->post;
    }
 
    public function save(): void
    {
        $this->post->update(
            $this->form->getState(),
        );
    } 
 
    public function render(): View
    {
        return view('edit-courses');
    }
}