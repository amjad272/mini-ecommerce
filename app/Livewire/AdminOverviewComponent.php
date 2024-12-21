<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;

class AdminOverviewComponent extends Component
{
    public $totalOrders;
    public $totalProducts;
    public $totalCategories;
    public $ordersByStatus;

    public function mount()
    {
        $this->loadOverviewData();
    }

    public function loadOverviewData()
    {
        $this->totalOrders = Order::count();
        $this->totalProducts = Product::count();
        $this->totalCategories = Category::count();
    }
    public function render()
    {
        return view('livewire.admin-overview-component')->layout('components.layouts.admin');
    }
}
