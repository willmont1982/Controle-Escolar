<?php


namespace Domain\Billet;

use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BilletAssignorAssignorTest extends \TestCase
{
    use DatabaseTransactions;

    public function getRecipient($recipient)
    {
        return json_encode([
            'nome' => $recipient->name,
            'endereco' => $recipient->street.', '.$recipient->number.' '.$recipient->complement,
            'cep' => $recipient->postcode,
            'uf' => $recipient->stateAbbr,
            'cidade' => $recipient->city,
            'documento' => $recipient->cnpj,
        ]);
    }

    public function test_create_billet_assignor()
    {
        $billetAssignor = factory(BilletAssignor::class)->create();

        $this->assertInstanceOf(BilletAssignor::class, $billetAssignor);

        $this->assertInstanceOf(Carbon::class, $billetAssignor->created_at);
        $this->assertInstanceOf(Carbon::class, $billetAssignor->updated_at);

        $this->seeInDatabase('billet_assignors', [
            'id' => $billetAssignor->id,
        ]);
        $this->assertEquals($billetAssignor->getRecipient(), $this->getRecipient($billetAssignor));
    }
}
