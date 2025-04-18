<?php

namespace App\Http\Controllers;

use App\Http\Services\CartService;
use App\Models\Dishe;
use Illuminate\Http\Request;

class CartController extends Controller
{
  protected $cartService;

  public function __construct(CartService $cartService)
  {
    $this->cartService = $cartService;
  }

  public function index()
  {
    $cart = $this->cartService->getCart();
    $total = $this->cartService->getTotal();
    $restaurantId = $this->cartService->getRestaurantId();

    return view('cart.index', compact('cart', 'total', 'restaurantId'));
  }

  public function add(Request $request, $productId)
  {
    $product = Dishe::findOrFail($productId);
    $restaurantId = $product->restaurant_id;

    $this->cartService->addToCart(
      $productId,
      $request->input('quantity', 1),
      $restaurantId,
      [
        'name' => $product->name,
        'price' => $product->price,
        'image' => $product->image
      ]
    );

    return redirect()->back()->with('success', 'Produit ajouté au panier');
  }

  public function update(Request $request, $productId)
  {
    $this->cartService->updateQuantity($productId, $request->quantity);
    return redirect()->route('cart.index')->with('success', 'Panier mis à jour');
  }

  public function remove($productId)
  {
    $this->cartService->removeFromCart($productId);
    return redirect()->route('cart.index')->with('success', 'Produit retiré du panier');
  }

  public function clear()
  {
    $this->cartService->clearCart();
    return redirect()->route('cart.index')->with('success', 'Panier vidé');
  }
}
