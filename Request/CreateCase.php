<?php

namespace Spliced\Signifyd\Request;

use Spliced\Signifyd\Model\Purchase;
use Spliced\Signifyd\Model\Recipient;
use Spliced\Signifyd\Model\Card;
use Spliced\Signifyd\Model\UserAccount;
use Spliced\Signifyd\Model\Seller;

class CreateCase extends AbstractRequest
{
    protected $data = array(
        'purchase'      => null,
        'recipient'     => null,
        'cart'          => null,
        'userAccount'   => null,
        'seller'        => null,
    );

    /**
     * @return Card|null
     */
    public function getCard()
    {
        return $this->get('card');
    }

    /**
     * @param Card|null $card
     */
    public function setCard(Card $card = null)
    {
        return $this->set('card', $card);
    }

    /**
     * @return Purchase|null
     */
    public function getPurchase()
    {
        return $this->get('purchase');
    }

    /**
     * @param Purchase|null $purchase
     */
    public function setPurchase(Purchase $purchase = null)
    {
        return $this->set('purchase', $purchase);
    }

    /**
     * @return Recipient|null
     */
    public function getRecipient()
    {
        return $this->get('recipient');
    }

    /**
     * @param Recipient|null $recipient
     */
    public function setRecipient(Recipient $recipient = null)
    {
        return $this->set('recipient', $recipient);
    }

    /**
     * @return Seller|null
     */
    public function getSeller()
    {
        return $this->get('seller');
    }

    /**
     * @param Seller|null $seller
     */
    public function setSeller(Seller $seller = null)
    {
        return $this->set('seller', $seller);
    }

    /**
     * @return UserAccount|null
     */
    public function getUserAccount()
    {
        return $this->get('userAccount');
    }

    /**
     * @param UserAccount|null $userAccount
     */
    public function setUserAccount(UserAccount $userAccount = null)
    {
        return $this->set('userAccount', $userAccount);
    }

    /**
     * @{inheritDoc}
     */
    public function getUri()
    {
        return 'cases';
    }

}