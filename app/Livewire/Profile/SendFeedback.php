<?php

declare(strict_types=1);

namespace App\Livewire\Profile;

use Livewire\Component;

class SendFeedback extends Component
{
    public string $feedback = '';

    public bool $consentTestimonial = false;

    public function render()
    {
        return view('profile.send-feedback');
    }

    public function sendFeedback(): void
    {
        $this->resetErrorBag();
        auth()->user()->feedback()->create(['feedback' => $this->feedback, 'consented_testimonial' => $this->consentTestimonial]);
        $this->feedback = '';
        $this->consentTestimonial = false;
        $this->dispatch('sent');
    }
}
