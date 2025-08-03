export default function CategoryNav({ categories, selectedCategory, onCategorySelect }) {
  return (
    <div className="mb-8">
      <div className="flex flex-wrap gap-4 justify-center">
        <button
          onClick={() => onCategorySelect('all')}
          className={`px-6 py-3 rounded-full font-medium transition-all duration-200 ${
            selectedCategory === 'all'
              ? 'bg-primary-600 text-white shadow-lg'
              : 'bg-white text-gray-700 hover:bg-gray-50 border border-gray-200'
          }`}
        >
          🍽️ All Items
        </button>
        
        {categories.map((category) => (
          <button
            key={category.id}
            onClick={() => onCategorySelect(category.id)}
            className={`px-6 py-3 rounded-full font-medium transition-all duration-200 ${
              selectedCategory === category.id
                ? 'bg-primary-600 text-white shadow-lg'
                : 'bg-white text-gray-700 hover:bg-gray-50 border border-gray-200'
            }`}
          >
            {category.icon} {category.name}
          </button>
        ))}
      </div>
    </div>
  );
} 