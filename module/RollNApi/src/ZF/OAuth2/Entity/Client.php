<?php

namespace ZF\OAuth2\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 */
class Client
{
    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $secret;

    /**
     * @var string
     */
    private $redirectUri;

    /**
     * @var array
     */
    private $grantType;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accessToken;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $refreshToken;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authorizationCode;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jwt;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jti;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $publicKey;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $scope;

    /**
     * @var \RollNApi\Entity\User
     */
    private $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->accessToken = new \Doctrine\Common\Collections\ArrayCollection();
        $this->refreshToken = new \Doctrine\Common\Collections\ArrayCollection();
        $this->authorizationCode = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jwt = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jti = new \Doctrine\Common\Collections\ArrayCollection();
        $this->publicKey = new \Doctrine\Common\Collections\ArrayCollection();
        $this->scope = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set clientId
     *
     * @param string $clientId
     * @return Client
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    /**
     * Get clientId
     *
     * @return string 
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * Set secret
     *
     * @param string $secret
     * @return Client
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * Get secret
     *
     * @return string 
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set redirectUri
     *
     * @param string $redirectUri
     * @return Client
     */
    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    /**
     * Get redirectUri
     *
     * @return string 
     */
    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    /**
     * Set grantType
     *
     * @param array $grantType
     * @return Client
     */
    public function setGrantType($grantType)
    {
        $this->grantType = $grantType;

        return $this;
    }

    /**
     * Get grantType
     *
     * @return array 
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add accessToken
     *
     * @param \ZF\OAuth2\Entity\AccessToken $accessToken
     * @return Client
     */
    public function addAccessToken(\ZF\OAuth2\Entity\AccessToken $accessToken)
    {
        $this->accessToken[] = $accessToken;

        return $this;
    }

    /**
     * Remove accessToken
     *
     * @param \ZF\OAuth2\Entity\AccessToken $accessToken
     */
    public function removeAccessToken(\ZF\OAuth2\Entity\AccessToken $accessToken)
    {
        $this->accessToken->removeElement($accessToken);
    }

    /**
     * Get accessToken
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Add refreshToken
     *
     * @param \ZF\OAuth2\Entity\RefreshToken $refreshToken
     * @return Client
     */
    public function addRefreshToken(\ZF\OAuth2\Entity\RefreshToken $refreshToken)
    {
        $this->refreshToken[] = $refreshToken;

        return $this;
    }

    /**
     * Remove refreshToken
     *
     * @param \ZF\OAuth2\Entity\RefreshToken $refreshToken
     */
    public function removeRefreshToken(\ZF\OAuth2\Entity\RefreshToken $refreshToken)
    {
        $this->refreshToken->removeElement($refreshToken);
    }

    /**
     * Get refreshToken
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Add authorizationCode
     *
     * @param \ZF\OAuth2\Entity\AuthorizationCode $authorizationCode
     * @return Client
     */
    public function addAuthorizationCode(\ZF\OAuth2\Entity\AuthorizationCode $authorizationCode)
    {
        $this->authorizationCode[] = $authorizationCode;

        return $this;
    }

    /**
     * Remove authorizationCode
     *
     * @param \ZF\OAuth2\Entity\AuthorizationCode $authorizationCode
     */
    public function removeAuthorizationCode(\ZF\OAuth2\Entity\AuthorizationCode $authorizationCode)
    {
        $this->authorizationCode->removeElement($authorizationCode);
    }

    /**
     * Get authorizationCode
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }

    /**
     * Add jwt
     *
     * @param \ZF\OAuth2\Entity\Jwt $jwt
     * @return Client
     */
    public function addJwt(\ZF\OAuth2\Entity\Jwt $jwt)
    {
        $this->jwt[] = $jwt;

        return $this;
    }

    /**
     * Remove jwt
     *
     * @param \ZF\OAuth2\Entity\Jwt $jwt
     */
    public function removeJwt(\ZF\OAuth2\Entity\Jwt $jwt)
    {
        $this->jwt->removeElement($jwt);
    }

    /**
     * Get jwt
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    /**
     * Add jti
     *
     * @param \ZF\OAuth2\Entity\Jti $jti
     * @return Client
     */
    public function addJti(\ZF\OAuth2\Entity\Jti $jti)
    {
        $this->jti[] = $jti;

        return $this;
    }

    /**
     * Remove jti
     *
     * @param \ZF\OAuth2\Entity\Jti $jti
     */
    public function removeJti(\ZF\OAuth2\Entity\Jti $jti)
    {
        $this->jti->removeElement($jti);
    }

    /**
     * Get jti
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJti()
    {
        return $this->jti;
    }

    /**
     * Add publicKey
     *
     * @param \ZF\OAuth2\Entity\PublicKey $publicKey
     * @return Client
     */
    public function addPublicKey(\ZF\OAuth2\Entity\PublicKey $publicKey)
    {
        $this->publicKey[] = $publicKey;

        return $this;
    }

    /**
     * Remove publicKey
     *
     * @param \ZF\OAuth2\Entity\PublicKey $publicKey
     */
    public function removePublicKey(\ZF\OAuth2\Entity\PublicKey $publicKey)
    {
        $this->publicKey->removeElement($publicKey);
    }

    /**
     * Get publicKey
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Add scope
     *
     * @param \ZF\OAuth2\Entity\Scope $scope
     * @return Client
     */
    public function addScope(\ZF\OAuth2\Entity\Scope $scope)
    {
        $this->scope[] = $scope;

        return $this;
    }

    /**
     * Remove scope
     *
     * @param \ZF\OAuth2\Entity\Scope $scope
     */
    public function removeScope(\ZF\OAuth2\Entity\Scope $scope)
    {
        $this->scope->removeElement($scope);
    }

    /**
     * Get scope
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Set user
     *
     * @param \RollNApi\Entity\User $user
     * @return Client
     */
    public function setUser(\RollNApi\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \RollNApi\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
