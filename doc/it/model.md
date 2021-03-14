# Model

### Indice

- [I model](#i-model)

- [Operazioni sui model](#operazioni-sui-model)
  
  - [Fillable](#fillable)
  
  - [Find](#find)
  
  - [Create](#create)
  
  - [Update](#update)

## I model

I model, permettono di interagire con le informazioni memorizzate all'interno del database e gestirle come se fossero degli oggetti.
Attraverso i model, è possibile eseguire su tali informazioni, una serie di operazioni di gestione degli stessi, come la creazione, la modifica, la cancellazione e la ricerca degli stessi.

## Operazioni sui model

I model, implementano una serie di metodi che permettono di operare con loro in modo rapido senza la necessità di dover eseguire query manualmente.

Tali operazioni vengono implementate, mediante l'utilizzo del trait `ModelActions` del package `Database`.

#### Fillable

____

L'attributo fillable dei vari model, contiene gli attributi che possono essere memorizzati mediante l'utilizzo di metodi come [create()](#create) e [update()](#update).

```php
protected $fillable = [
  'name',
  'surname',
  'email',
  'password'  
];
```

Affinchè tali valori, possano essere correttamente gestiti, sarà necessario effettuare un ovveride di tale attributo, all'interno di ogni model, andando ad indicare i vali attributi da inizializzare.

Tali attributi, saranno inoltre dispobili come attributi pubblici del model, per tale motivo sarà possibile accedere ad essi, in modo diretto:

```php
$user->name;


$user->name = 'Mario';
```

#### Find

Il metodo statico `find($key)`, permette di recuperare un dato model dal database, partendo dalla sua `primary key`.  Tale metodo restituisce il model desiderato se trovato, altrimenti resituisce `null`.

```php
$user = User::find(1);
```

> È possibile utilizzare anche il metodo `findOrFail($key)` il quale solleva un eccezione del tipo `ModelNotFound` se il model richiesto non viene trovato all'interno del database.

#### Create

____

I model ereditano il metodo statico `create()`, attraverso il quale è possibile creare un model e salvarlo all'interno del database, al quale va passato un array associatico, le cui chiavi rappresentano i vari valori da inizializzare.

```php
$user = User::create([
   'name' => 'Mario',
   'surname' => 'Rossi',
   'email' => 'm.rossi@example.com'
]);
```

L'esecuzione del metodo, restituisce un oggetto del relativo model con i vari attributi inizializzati con i valori indicati. L'inizializzazione delle informazioni avviene sulla base degli attributi del model indicati all'interno dell'attributo `fillable`.

#### Update

___

Il metodo update, permette di aggiornare in modo rapido le informazioni del model. Anche in questo caso, esso accetta come parametro un `array associativo`.

```php
$user->update([
   'name' => 'Mario',
   'surname' => 'Bianchi',
   'email' => 'm.rossi@example.com'
]);
```

Tale metodo, restituisce un booleano il quale ha valore `true` se l'aggiornamento delle informazioni avviene con successo, `false` se l'aggiornamento delle informazioni fallisce.
