<?php
include_once __DIR__ . '/Card.php';

class Food extends Card
{

    public function __construct(
        int $id,
        string $name,
        string $img,
        int $price,
        Category $category,
        string $description,
        protected Taste $taste,
        protected string $date,
        protected int $weight,


    ) {
        parent::__construct($id, $name, $img, $price, $category, $description);
    }

    public function structureCard()
    {
        // ritorna il codice html della card da mostrare in pagina
        $type = get_class($this);
        return "
			<div class=\"col\">
				<div class=\"card h-100\">
					
					<div class=\"card-body\">
						<h5 class=\"card-title\">{$this->name}</h5>
						<img src=\"\" class=\"card-img-top\" alt=\"\">
					</div>
					<ul class=\"list-group list-group-flush\">
						<li class=\"list-group-item\">Type: {$type}</li>
						<li class=\"list-group-item\">Category: {$this->category->getName()} </li>
                        <li class=\"list-group-item\">Composition: {$this->taste->writeName()} </li>
						<li class=\"list-group-item\">Peso: {$this->weight}g</li>
						<li class=\"list-group-item\">Scadenza: {$this->date}</li>
						<li class=\"list-group-item\">Prezzo: {$this->getFormattedPrice()}</li>
					</ul>
                 
                    <div class=\"px-3 py-2\">
                        <p class=\"list-group-item\"> {$this->description}</p>
					</div>
					<div class=\"card-body\">
						<a href=\"#\" class=\"card-link\">Details</a>
					</div>
				</div>
			</div>
		";
    }

}