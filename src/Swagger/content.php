<?php

/**
 * @OA\Get(
 *      path="/module/content/v1/content",
 *      operationId="browseModuleContentV1Content",
 *      tags={"content"},
 *      summary="Browse Content",
 *      description="Browse Content",
 *      @OA\Response(response=200, description="Successful operation"),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=401, description="Unauthorized"),
 *      @OA\Response(response=402, description="Payment Required"),
 *      security={
 *          {"bearerAuth": {}}
 *      }
 * )
 */

/**
 * @OA\Get(
 *      path="/module/content/v1/content/read",
 *      operationId="browseModuleContentV1ContentRead",
 *      tags={"content"},
 *      summary="Read Content",
 *      description="Read Content",
 *      @OA\Parameter(
 *          name="id",
 *          required=true,
 *          in="query",
 *          @OA\Schema(
 *              type="string"
 *          )
 *      ),
 *      @OA\Response(response=200, description="Successful operation"),
 *      @OA\Response(response=400, description="Bad request"),
 *      @OA\Response(response=401, description="Unauthorized"),
 *      @OA\Response(response=402, description="Payment Required"),
 *      security={
 *          {"bearerAuth": {}}
 *      }
 * )
 */

 /**
  * @OA\Get(
  *      path="/module/content/v1/content/fetch",
  *      operationId="browseModuleContentV1ContentFetch",
  *      tags={"content"},
  *      summary="Fetch Content",
  *      description="Fetch Content",
  *      @OA\Parameter(
  *          name="slug",
  *          required=true,
  *          in="query",
  *          @OA\Schema(
  *              type="string"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  * )
  */

 /**
  * @OA\Get(
  *      path="/module/content/v1/content/fetch-multiple",
  *      operationId="browseModuleContentV1ContentFetchMultiple",
  *      tags={"content"},
  *      summary="Fetch Multiple Content",
  *      description="Fetch Multiple Content",
  *      @OA\Parameter(
  *          name="slug",
  *          required=true,
  *          in="query",
  *          @OA\Schema(
  *              type="string"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  * )
  */
