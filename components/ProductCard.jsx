'use client';

import { Plus, Star, Flame, Leaf } from 'lucide-react';
import { formatPrice } from '@/lib/utils';

export default function ProductCard({ product, onAddToCart }) {
  return (
    <div className="card overflow-hidden group">
      {/* Product Image */}
      <div className="relative h-48 bg-gray-200 overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-br from-primary-100 to-secondary-100 flex items-center justify-center">
          <span className="text-6xl opacity-20">
            {product.category === 'pizza' && '🍕'}
            {product.category === 'burger' && '🍔'}
            {product.category === 'sides' && '🍟'}
            {product.category === 'drinks' && '🥤'}
            {product.category === 'desserts' && '🍰'}
          </span>
        </div>
        
        {/* Badges */}
        <div className="absolute top-2 left-2 flex flex-wrap gap-1">
          {product.popular && (
            <span className="bg-secondary-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
              <Star className="h-3 w-3" />
              Popular
            </span>
          )}
          {product.spicy && (
            <span className="bg-red-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
              <Flame className="h-3 w-3" />
              Spicy
            </span>
          )}
          {product.vegetarian && (
            <span className="bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center gap-1">
              <Leaf className="h-3 w-3" />
              Veg
            </span>
          )}
        </div>
      </div>

      {/* Product Info */}
      <div className="p-4">
        <h3 className="font-semibold text-lg text-gray-900 mb-2">
          {product.name}
        </h3>
        <p className="text-gray-600 text-sm mb-3 line-clamp-2">
          {product.description}
        </p>
        
        {/* Ingredients */}
        {product.ingredients && (
          <div className="mb-3">
            <p className="text-xs text-gray-500 mb-1">Ingredients:</p>
            <div className="flex flex-wrap gap-1">
              {product.ingredients.slice(0, 3).map((ingredient, index) => (
                <span
                  key={index}
                  className="text-xs bg-gray-100 text-gray-600 px-2 py-1 rounded"
                >
                  {ingredient}
                </span>
              ))}
              {product.ingredients.length > 3 && (
                <span className="text-xs text-gray-500">+{product.ingredients.length - 3} more</span>
              )}
            </div>
          </div>
        )}

        {/* Price and Add to Cart */}
        <div className="flex items-center justify-between">
          <span className="text-xl font-bold text-primary-600">
            {formatPrice(product.price)}
          </span>
          <button
            onClick={() => onAddToCart(product)}
            className="bg-primary-600 hover:bg-primary-700 text-white p-2 rounded-full transition-colors duration-200 group-hover:scale-110"
          >
            <Plus className="h-5 w-5" />
          </button>
        </div>
      </div>
    </div>
  );
} 